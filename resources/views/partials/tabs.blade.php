<div>

    <div class="bg-white rounded-md shadow-sm my-3 overflow-auto text-nowrap">
        <x-tab-btn tabName="profile" label="الملف التعريفي" imgFile="icons/profile.png"/>
        <x-tab-btn tabName="portfolio" label="معرض الأعمال" imgFile="icons/portfolio.png"/>
        <x-tab-btn tabName="packages" label="باقات ومنتجات" imgFile="icons/packages.png"/>
        <x-tab-btn tabName="rating" label="التقييمات" imgFile="icons/rating.png"/>
    </div>

    <div class="border border-secondary rounded-3">
        <form action="" enctype="multipart/form-data">
            <x-packages-content>
                <x-slot name="mainContent">
                    <div class="progress-container mx-lg-5">
                        <x-progress-step stepName="عنوان العمل" status="completed"/>
                        <x-progress-step stepName="تفاصيل العمل" status="active"/>
                        <x-progress-step stepName="مراجعة العمل"/>
                    </div>
                </x-slot>
            </x-packages-content>
            @livewire('file-upload')
            <x-packages-content>
                <x-slot name="mainContent">
                    <x-input-group :required="true">
                        <x-slot name="label">
                            يجب عليك إضافة مجموعة صور أو صورة واحدة على الأقل إلى مشروعك
                        </x-slot>
                        <x-slot name="input">
                            <x-file-input id="project-images" :required="true"/>
                        </x-slot>
                        <x-slot name="details">
                            <ul>
                                <li><p>الصور <small>(.png .gif .jpg يصل حجمها إلى 10 ميغابايت، ولا يزيد حجمها عن 4000 بكسل في أي بُعد)</small></p></li>
                                <li><p>أبعاد الصورة (300 * 300)</p></li>
                                <li><p>الحد الأقصى لمجموع الصور 20 صورة</p></li>
                            </ul>
                        </x-slot>
                    </x-input-group>
                </x-slot>
                <x-slot name="descriptionTitle">نموذج الصور</x-slot>
                <x-slot name="description">يساعدك في تعزيز احترافيتك للعملاء كل ما كان المشروع مليئًا بالصور كل ما وثق العميل في التعامل معك</x-slot>
            </x-packages-content>

            <x-packages-content>
                <x-slot name="mainContent">
                    <x-input-group :required="true">
                        <x-slot name="label">
                            يجب عليك إضافة صورة لغلاف مشروعك
                        </x-slot>
                        <x-slot name="input">
                            <x-file-input id="project-poster" :required="true"/>
                        </x-slot>
                    </x-input-group>
                </x-slot>
                <x-slot name="descriptionTitle">غلاف العمل</x-slot>
                <x-slot name="description">يساعدك في إبراز احترافيتك وجذب العملاء من خلال غلاف جذاب</x-slot>
            </x-packages-content>
    
            <div class="d-none d-lg-block">
                <x-packages-content>
                    <x-slot name="mainContent">
                        <x-input-group>
                            <x-slot name="label">
                                اختر مهارات العمل
                            </x-slot>
                            <x-slot name="input">
                                <select name="poster" id="poster" class="form-select w-50">
                                    <option value="" selected disabled hidden></option>
                                    <option value="team_work">العمل ضمن فريق</option>
                                    <option value="time_management">إدارة الوقت</option>
                                </select>
                            </x-slot>
                        </x-input-group>
                    </x-slot>
                    <x-slot name="descriptionTitle">مهارات العمل</x-slot>
                    <x-slot name="description">توضح للعميل المهارات المستخدمة في تنفيذ العمل، وتعزز تمكنك من العمل المنفذ</x-slot>
                </x-packages-content>
        
                <x-packages-content>
                    <x-slot name="mainContent">
                        <x-input-group>
                            <x-slot name="label">
                                وصف العمل
                            </x-slot>
                            <x-slot name="input">
                                <textarea name="work_description" id="work_description" cols="10" rows="10" class="form-control w-75 resize-none"></textarea>
                            </x-slot>
                        </x-input-group>
                    </x-slot>
                    <x-slot name="descriptionTitle">وصف العمل</x-slot>
                    <x-slot name="description">اكتب وصف دقيق للعمل توضح فيه العمل المنجز لإبراز قدراتك ونجاحك في العمل</x-slot>
                </x-packages-content>
            </div>

            <x-packages-content>
                <x-slot name="mainContent">
                    <div class="d-flex flex-row-reverse flex-lg-row gap-3 justify-content-center justify-content-lg-end mb-5 pb-5">
                        <button class="btn border border-gray rounded-5 px-5 text-dark tajawal-medium">الغاء</button>
                        <button class="btn btn-primary rounded-5 px-5 tajawal-medium">التالي</button>
                    </div>
                </x-slot>
            </x-packages-content>

        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const steps = document.querySelectorAll('.circle');

    // Example: Setting the second step as the active step
    steps[1].classList.add('active');

    // Add this to your CSS:
    /*
    .circle.active {
        background-color: #1d7ab6;
        color: #fff;
    }
    */
});

</script>