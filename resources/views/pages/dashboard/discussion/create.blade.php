@extends('layouts.dashboard')
@section('title')
    Buat Diskusi
@endsection
@section('content')
<div class="form-layout-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card-style mb-30">
                <h6 class="mb-25">Buat Diskusi</h6>
                <form action="{{ route('dashboard.discussion.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="select-style-1">
                                <label for="category_discussion_categories_id">Kategori Diskusi</label>
                                <select name="category_discussion_categories_id" class="select2 form-control bg-transparent @error('category_discussion_categories_id') is-invalid @enderror" autofocus>
                                    <option value="">Pilih Kategori Diskusi</option>
                                    @foreach ($discussion_categories as $discussion_category)
                                        <option value="{{ $hash->encodeHex($discussion_category->id) }}" @if(old('category_discussion_categories_id') == $hash->encodeHex($discussion_category->id)) selected @endif>{{ $discussion_category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_discussion_categories_id')
                                    <small class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>
                            <div class="input-style-1">
                                <label for="title">Judul Diskusi</label>
                                <input type="text" name="title" placeholder="Masukkan Judul Diskusi" class="form-control bg-transparent @error('title') is-invalid @enderror" value="{{ old('title') }}"/>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-style-1">
                                <label for="description">Deskripsi Diskusi</label>
                                <textarea name="description" class="form-control bg-transparent @error('description') is-invalid @enderror" rows="10" placeholder="Masukkan Deskripsi Diskusi"/>{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-style-1">
                                <label for="file">File Diskusi (Opsional)</label>
                                <input type="file" name="file" placeholder="Unggah File Diskusi" class="form-control bg-transparent @error('file') is-invalid @enderror" value="{{ old('file') }}"/>
                                <small>Unggah File Diskusi</small>
                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="button-group d-flex justify-content-center flex-wrap">
                                <button type="submit" class="main-btn primary-btn btn-hover m-2">
                                    Buat Diskusi
                                </button>
                                <a href="{{ route('dashboard.discussion.index') }}" class="main-btn danger-btn-outline m-2">
                                    Batal
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection