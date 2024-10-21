document.addEventListener('DOMContentLoaded', function() {
    const aboutSection = document.querySelector('.about');

    // api theo dõi phần hiển thị
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) { // kiểm tra phần tử có giao với khung hình không
                aboutSection.classList.add('show'); //thêm class show vào about
            }
        });
    }, { threshold: 0.1 }); //hàm sẽ được kích hoạt khi ít nhất 10% (0.1) diện tích của phần tử aboutSection hiển thị

    observer.observe(aboutSection); //kích hoạt IntersectionObservertheo dõi aboutSection
});