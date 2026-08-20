<?php include 'includes/header.php'; ?>

<!-- قسم الهيرو -->
<section class="hero" style="background: linear-gradient(135deg, var(--primary), var(--secondary)); color: white; padding: 4rem 0; text-align: center;">
    <div class="container">
        <h1 style="font-size: 3rem; margin-bottom: 1rem;">اهلاً بكم في نسيم فلور</h1>
        <p style="font-size: 1.2rem; margin-bottom: 2rem;">اكتشفوا عالم الهدايا الساحر حيث تلتقي الأناقة بالجمال</p>
        <a href="products.php" class="btn" style="background: white; color: var(--primary);">تصفح المنتجات</a>
    </div>
</section>

<!-- قسم المميزات -->
<section class="features" style="padding: 4rem 0;">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 3rem;">لماذا تختار نسيم فلور؟</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
            <div style="text-align: center; padding: 2rem;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🎁</div>
                <h3>هدايا مميزة</h3>
                <p>تشكيلة واسعة من الهدايا الفريدة والراقية</p>
            </div>
            <div style="text-align: center; padding: 2rem;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🚚</div>
                <h3>توصيل سريع</h3>
                <p>خدمة توصيل سريعة وموثوقة لجميع أنحاء المدينة</p>
            </div>
            <div style="text-align: center; padding: 2rem;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">💝</div>
                <h3>تغليف فاخر</h3>
                <p>تغليف أنيق يضيف لمسة خاصة على هداياكم</p>
            </div>
        </div>
    </div>
</section>

<!-- قسم المنتجات المميزة -->
<section class="featured-products" style="background: var(--light); padding: 4rem 0;">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 3rem;">منتجاتنا المميزة</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            <!-- سيتم استبدال هذا بالمحتوى الديناميكي -->
            <div style="background: white; border-radius: 10px; overflow: hidden; box-shadow: var(--shadow);">
                <div style="height: 200px; background: #ddd; display: flex; align-items: center; justify-content: center; font-size: 3rem;">🌹</div>
                <div style="padding: 1.5rem;">
                    <h3 style="margin-bottom: 0.5rem;">باقة ورد طبيعي</h3>
                    <p style="color: var(--gray); margin-bottom: 1rem;">باقة ورد طبيعي فاخرة</p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-weight: bold; color: var(--primary);">75.00 ر.س</span>
                        <button class="btn btn-primary">أضف للسلة</button>
                    </div>
                </div>
            </div>
            
            <div style="background: white; border-radius: 10px; overflow: hidden; box-shadow: var(--shadow);">
                <div style="height: 200px; background: #ddd; display: flex; align-items: center; justify-content: center; font-size: 3rem;">🎀</div>
                <div style="padding: 1.5rem;">
                    <h3 style="margin-bottom: 0.5rem;">هدية عيد الميلاد</h3>
                    <p style="color: var(--gray); margin-bottom: 1rem;">هدية مميزة لعيد الميلاد</p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-weight: bold; color: var(--primary);">120.00 ر.س</span>
                        <button class="btn btn-primary">أضف للسلة</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 3rem;">
            <a href="products.php" class="btn btn-outline">عرض جميع المنتجات</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>