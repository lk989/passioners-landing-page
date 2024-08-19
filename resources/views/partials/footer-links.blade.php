@php
    $firstColumnLinks = array("مدونة الشغف", "شروط الاستخدام", "سياسة الخصوصية", "سياسة استرجاع الأموال", "عمولة المنصة", "الدعم والمساعدة", "الأسئلة الشائعة", "اتصل بنا");
    $secondColumnLinks = array("تصميم الجرافيك والشعارات", "إنشاء المتاجر والمواقع والتطبيقات", "تواصل اجتماعي وتسويق رقمي وحملات", "انفوجرافيك وموشن جرافيك", "كتابة المحتوى والترجمة", "التصوير والفيديو", "تصميم داخلي وثلاثي الأبعاد", "الهندسة والعمارة");
@endphp

<div class="col-lg-6">
    <div class="row border-top border-bottom border-light">
        <x-footer-links-column :links="$firstColumnLinks"/>
        <x-footer-links-column :links="$secondColumnLinks"/>
    </div>
    <div class="d-flex gap-2 py-3">
        <img src="{{ asset('img/maroof.jpg') }}" height="36rem" alt="">
        <x-social-media-icons iconPath="icons/facebook.png"/>
        <x-social-media-icons iconPath="icons/twitter.png"/>
        <x-social-media-icons iconPath="icons/linkedin.png"/>
        <x-social-media-icons iconPath="icons/instagram.png"/>
        <x-social-media-icons iconPath="icons/whatsapp.png"/>
    </div>
</div>