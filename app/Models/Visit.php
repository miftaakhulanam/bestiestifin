<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'user_agent',
        'url',
        'referer',
        'visit_date',
    ];

    protected $casts = [
        'visit_date' => 'date',
    ];

    /**
     * Track a visit
     */
    public static function trackVisit($request)
    {
        // Skip tracking for admin routes
        if (str_contains($request->url(), '/admin')) {
            return;
        }

        // Skip tracking for API routes
        if (str_contains($request->url(), '/api')) {
            return;
        }

        // Skip tracking for same IP within 30 minutes to avoid spam
        $recentVisit = self::where('ip_address', $request->ip())
            ->where('url', $request->url())
            ->where('created_at', '>=', now()->subMinutes(30))
            ->first();

        if ($recentVisit) {
            return;
        }

        return self::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'url' => $request->url(),
            'referer' => $request->header('referer'),
            'visit_date' => now()->toDateString(),
        ]);
    }

    /**
     * Get daily visits for the last N days
     */
    public static function getDailyVisits($days = 7)
    {
        return self::selectRaw('visit_date, COUNT(DISTINCT ip_address) as unique_visits')
            ->where('visit_date', '>=', now()->subDays($days))
            ->groupBy('visit_date')
            ->orderBy('visit_date')
            ->get();
    }

    /**
     * Get monthly visits for the last N months
     */
    public static function getMonthlyVisits($months = 12)
    {
        return self::selectRaw('DATE_FORMAT(visit_date, "%Y-%m") as month, COUNT(DISTINCT ip_address) as unique_visits')
            ->where('visit_date', '>=', now()->subMonths($months))
            ->groupBy('month')
            ->orderBy('month')
            ->get();
    }
}
