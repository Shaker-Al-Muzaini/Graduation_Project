<div class="form-group">
    <x-form.input label="Team Name" name="team_title"  :value="$teams->team_title"/>
</div>

<div class="form-group">
    <x-form.textarea label="Team Description "
       name="team_description" :value="$teams->team_description"/>
</div>

<div class="form-group">
    <x-form.input label=" Team Image "  name="team_img" type="file"  :value="$teams->team_img" accept="image/*"/>
    @if($teams->team_img)
        <img  src="{{asset($teams->team_img)}}" alt="not" height="70">
    @endif
    <br>
</div>

<br><br>
<div>
    <button type="submit" class="btn btn-outline-info">{{$button_label ??'Save'}}</button>
</div>
