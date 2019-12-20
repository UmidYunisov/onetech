<div class="form-group">
    <input type="text" class="form-control" name="cat_title" value="{{ $category->cat_title ?? '' }}" placeholder="Наименование категории">
</div>

<div class="form-group">
    <select name="parent_id" class="form-control">
        <option value="0">-- без родительской категории --</option>
            @include('admin.categories.parent_category')
    </select>
</div>