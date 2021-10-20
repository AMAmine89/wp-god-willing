var inchallah = [
 'أن شاء الله',
 'ان شاء الله',
 'إنشاء الله',
 'انشاء الله',
 'أنشاء الله',
 'نشاء الله',
 'انشا الله',
 'إنشا الله',
 'أنشا الله',
 'نشاالله',
 'انشاالله',
 'إنشاالله',
 'أنشاالله',
 'نشاالله', 
]

inchallah.forEach(el => {
    document.body.innerHTML = document.body.innerHTML.replaceAll(el, '****');
});