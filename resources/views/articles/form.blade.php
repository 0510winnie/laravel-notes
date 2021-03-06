
<div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" name="title" value="{{ $article->title }}">
</div>

<div class="form-group">
    <label for="content">Content:</label>
    <textarea class="form-control" name="content">{{ $article->content }}</textarea>
</div>

<div class="form-group">
    <label for="category_id">Category</label>
    <select name="category_id" class="form-control">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>