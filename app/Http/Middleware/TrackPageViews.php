<?php

namespace App\Http\Middleware;

use App\Models\PageView;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackPageViews
{
    public function handle(Request $request, Closure $next)
    {
        if (
            $request->isMethod('GET') &&
            $request->route() &&
            $page = $request->route()->getName()
        ) {
            $fingerprint = hash(
                'sha256',
                $request->ip() . '|' . $request->userAgent()
            );

            $exists = DB::table('page_view_visits')
                ->where('page', $page)
                ->where('fingerprint', $fingerprint)
                ->where('viewed_at', '>=', now()->subDay())
                ->exists();

            if (! $exists) {

                DB::table('page_view_visits')->insert([
                    'page' => $page,
                    'fingerprint' => $fingerprint,
                    'viewed_at' => now(),
                ]);

                $pageView = PageView::firstOrCreate(
                    ['page' => $page],
                    ['views' => 0]
                );

                $pageView->increment('views');
            }

            view()->share(
                'pageViews',
                PageView::where('page', $page)->value('views') ?? 0
            );
        }

        return $next($request);
    }
}