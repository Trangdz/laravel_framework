<h1>Add folder</h1>
<form method="POST" action=<?php echo route('categories.add'); ?>>
    <div>
        <input type="text" name="category_name" placeholder="Tên chuyên mục">
        
    </div>

    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
    <button type="submit">Add product</button>
</form>