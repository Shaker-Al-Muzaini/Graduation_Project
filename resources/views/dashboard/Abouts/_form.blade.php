<div class="form-group">
    <x-form.textarea label="About Title"
       name="about" :value="$abouts->about"/>
</div>
<div class="form-group">
    <x-form.textarea label="About Our Mission "
                     name="our_mission" :value="$abouts->our_mission"/>
</div>
<div class="form-group">
    <x-form.textarea label="About Our Vision "
                     name="our_vision" :value="$abouts->our_vision"/>
</div>


<br><br>
<div>
    <button type="submit" class="btn btn-outline-info">{{$button_label ??'Save'}}</button>
</div>
