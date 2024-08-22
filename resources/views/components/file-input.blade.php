<label for="{{$id}}" class="border-1 border-dashed border-primary rounded-5 cursor-pointer">
    <input type="file" id="{{$id}}" class="d-none" :required="$required??false" multiple accept="image/*"/>
    <p class="d-inline-block px-lg-4 px-2 py-5 m-0">قم بسحب الصور وإفلاتها أو <span class="text-primary"> تصفح</span> ملفات الصور</p>
</label>