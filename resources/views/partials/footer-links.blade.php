@php
    $firstColumnLinks = array("مدونة الشغف", "شروط الاستخدام", "سياسة الخصوصية", "سياسة استرجاع الأموال", "عمولة المنصة", "الدعم والمساعدة", "الأسئلة الشائعة", "اتصل بنا");
    $secondColumnLinks = array("تصميم الجرافيك والشعارات", "إنشاء المتاجر والمواقع والتطبيقات", "تواصل اجتماعي وتسويق رقمي وحملات", "انفوجرافيك وموشن جرافيك", "كتابة المحتوى والترجمة", "التصوير والفيديو", "تصميم داخلي وثلاثي الأبعاد", "الهندسة والعمارة");
@endphp

<div class="col-lg-6 border-top border-bottom border-light">
    <div class="row">
        <x-footer-links-column :links="$firstColumnLinks"/>
        <x-footer-links-column :links="$secondColumnLinks"/>
    </div>
</div>