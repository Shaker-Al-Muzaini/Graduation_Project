<div class="form-group">
    <x-form.input label="Courses Name" name="courses_name"  :value="$courses->courses_name"/>
</div>
<div class="form-group">
    <x-form.input label="Courses Category" name="courses_category"  :value="$courses->courses_category"/>
</div>
<div class="form-group">
    <x-form.input label="Short Title" name="short_title"  :value="$courses->short_title"/>
</div>

<div class="form-group">
    <x-form.textarea label="long title" id="my-editor"
       name="long_title" :value="$courses->long_title"/>
</div>
<div class="form-group">
    <x-form.input label="courses Image "  name="courses_image" type="file"  :value="$courses->courses_image" accept="image/*"/>
    @if($courses->courses_image)
        <img src="{{asset($courses->courses_image)}}" alt="not" height="70">
    @endif
    <br>
</div>

<div class="form-group">
    <x-form.input label="Small Img"  name="small_img" type="file"  :value="$courses->small_img" accept="image/*"/>
    @if($courses->small_img)
        <img src="{{asset($courses->small_img)}}" alt="not" height="70">
    @endif
    <br>
</div>
<div class="form-group">
    <x-form.input label="courses_students_count" type="number" name="courses_students_count"  :value="$courses->courses_students_count"/>
</div>
<div class="form-group">
    <x-form.input label="courses_description" type="text" name="courses_description"  :value="$courses->courses_description"/>
</div>
<div class="form-group">
    <x-form.input label="courses lectures count" type="number" name="courses_lectures_count"  :value="$courses->courses_lectures_count"/>
</div>

<div class="form-group">
    <x-form.input label="URL" type="text" name="url"  :value="$courses->url"/>
</div>
<div class="form-group">
    <x-form.input label="Instructor" type="text" name="instructor"  :value="$courses->instructor"/>
</div>
<div class="form-group">
    <x-form.input label="Skill" type="text" name="skill"   :value="$courses->skill"/>
</div>
<div class="form-group">

    <x-form.input label="courses long description"  name="courses_long_description"   :value="$courses->courses_long_description"/>
</div>

<div class="form-group">
    <x-form.input label="Video URL" type="text" name="video_url"  :value="$courses->video_url"/>
</div>
<br><br>
<div>
    <button type="submit" class="btn btn-outline-info">{{$button_label ??'Save'}}</button>
</div>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
</script>
<script>
    CKEDITOR.replace('my-editor', options);
</script>
<script>
    CKEDITOR.replace('my-editor2', options);
</script><script>
    CKEDITOR.replace('my-editor3', options);
</script>
