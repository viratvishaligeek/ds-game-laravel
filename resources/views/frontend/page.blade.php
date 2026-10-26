@extends('frontend.include.layout')

@section('meta_title', trim((string) ($page->meta_title ?? '')) !== '' ? $page->meta_title : $page->name . ' | ' . config('app.name'))
@section('meta_description', trim((string) ($page->meta_description ?? '')) !== '' ? $page->meta_description : \Illuminate\Support\Str::limit(strip_tags((string) $page->content), 155))
@section('meta_robots', ($page->noindex ?? false) ? 'noindex,follow' : (request()->query->count() ? 'noindex,follow' : 'index,follow'))

@section('content')
<section class="section"><div class="wrap" style="max-width:1000px">
    <article class="blog-card">
        <h1>{{ $page->name }}</h1>
        <div class="cms-page-content">{{ $page->content }}</div>
    </article>
</div></section>
@endsection
