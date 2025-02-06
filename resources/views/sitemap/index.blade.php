

<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <changefreq>daily</changefreq>
        <priority>1.00</priority>
    </url>
    @foreach ($baivietList as $item1)
        <url>
            <loc>{{ route('indexCode', ['code' => $item1->code]) }}</loc>
            <lastmod>{{ $item1->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1.00</priority>
        </url>
    @endforeach
  	@foreach ($danhmucsanphamList as $item4)
        <url>
            <loc>{{ route('indexCode', ['code' => $item4->code]) }}</loc>
            <lastmod>{{ $item4->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1.00</priority>
        </url>
    @endforeach
  	@foreach ($danhmucbaivietList as $item3)
        <url>
            <loc>{{ route('indexCode', ['code' => $item3->code]) }}</loc>
            <lastmod>{{ $item3->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1.00</priority>
        </url>
    @endforeach
    @foreach ($sanphamList as $item2)
        <url>
            <loc>{{ route('indexCode', ['code' => $item2->code]) }}</loc>
            <lastmod>{{ $item2->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1.00</priority>
        </url>
    @endforeach
    <url>
        <loc>{{ route('indexCode', ['code' => 'gioi-thieu']) }}</loc>
        <changefreq>daily</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>{{ route('indexCode', ['code' => 'lien-he']) }}</loc>
        <changefreq>daily</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>{{ route('indexCode', ['code' => 'index/error-404']) }}</loc>
        <changefreq>daily</changefreq>
        <priority>1.00</priority>
    </url>
</urlset> 