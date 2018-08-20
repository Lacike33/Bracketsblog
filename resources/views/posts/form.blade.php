<div class="control-group">
    <div class="form-group floating-label-form-group controls">
        <label>Nadpis</label>
        <input type="text" class="form-control" placeholder="Nadpis postu" id="title" name="title" value="{{ old('title', isset($post->title) ? $post->title : null) }}" vadata-validation-required-message="Zadaj nadpis blogu.">
        <p class="help-block text-danger"></p>
    </div>
</div>
<div class="control-group">
    <div class="form-group floating-label-form-group controls">
        <label>Popis</label>
        <input type="email" class="form-control" placeholder="Strucny popis postu" id="description" name="description" value="{{ old('description', isset($post->description) ? $post->description : null) }}"  data-validation-required-message="Zadaj strucny popis.">
        <p class="help-block text-danger"></p>
    </div>
</div>
<div class="control-group">
    <div class="form-group floating-label-form-group controls">
        <label>Obsah</label>
        <textarea rows="5" class="form-control" placeholder="Obsah postu" id="content" name="content"  data-validation-required-message="Zadaj obsah postu.">{{ old('content', isset($post->content) ? $post->content : null) }}</textarea>
        <p class="help-block text-danger"></p>
    </div>
</div>
<br>
@if (isset($tags))
    <div class="form-group">
        @foreach($tags as $tag)
            <label class="custom-checkbox">
                <input type="checkbox" name="tags[]" value="{{ $tag->id }}" >
                {{ $tag->name }}
            </label>
        @endforeach
    </div>
@endif
<div id="success">
    <div class="form-group">
        <button type="submit" class="btn btn-primary" id="savePost">Ulož</button>
    </div>
    <small>alebo</small><br>
        <a href="{{ URL::previous() }}" class="btn btn-outline-dark">Zruš</a>
</div>
