<?php

namespace App\Http\Controllers;

use App\Models\Event; // Assurez-vous d'importer le modèle Event si ce n'est pas déjà fait
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [
            route('Accueil'),
            route('Reservation'),
            route('Gallery'),
        ];

        $xml = $this->generateSitemap($urls);

        // Si vous souhaitez également afficher le contenu XML dans une vue
        return view('sitemap')->with('xml', $xml);

        // Si vous souhaitez simplement renvoyer le contenu XML sans vue
        // return Response::make($xml, 200)->header('Content-Type', 'text/xml');
    }




    private function generateSitemap($urls)
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>' . $url . '</loc>';
            $xml .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
            $xml .= '<changefreq>monthly</changefreq>';
            $xml .= '<priority>0.8</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return $xml;
    }
}

