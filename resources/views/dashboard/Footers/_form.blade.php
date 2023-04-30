<div class="form-group">
    <x-form.input label="Address" type="text" name="address"  :value="$footers->address"/>
</div>
<div class="form-group">
    <x-form.input label="Phone" type="tel" name="phone"  :value="$footers->phone"/>
</div>
<div class="form-group">
    <x-form.input label="Email" name="email"  type="email" :value="$footers->email"/>
</div>
<div class="form-group">
    <x-form.input label="Facebook URL" type="url" name="facebook_url"  :value="$footers->facebook_url"/>
</div>
<div class="form-group">
    <x-form.input label="Instagram URL"  type="url" name="instagram_url"  :value="$footers->instagram_url"/>
</div>
<div class="form-group">
    <x-form.input label="Linkedin URL"  type="url" name="linkedin_url"  :value="$footers->linkedin_url"/>
</div>
<div class="form-group">
    <x-form.input label="Twitter URL"  type="url" name="twitter_url"  :value="$footers->twitter_url"/>
</div>
<div class="form-group">
    <x-form.input label="Youtube Url"  type="url" name="youtube_url"  :value="$footers->youtube_url"/>
</div>
<br><br>
<div>
    <button type="submit" class="btn btn-outline-info">{{$button_label ??'Save'}}</button>
</div>
