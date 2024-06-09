document.addEventListener('DOMContentLoaded', function() {
    const inputSearch = document.querySelector(".input-search");
    const autoBox = document.querySelector(".autobox");
    const searchForm = document.querySelector(".search-form");
    const searchInput = document.querySelector("input[name='search']");

    if (inputSearch && autoBox && searchForm && searchInput) {
        const recommendList = [
            { name: "Ba Na Hill", link: "BaNa.php" },
            { name: "Suối Khoáng Nóng Thần Tài", link: "SuoiKhoangNong.php" },
            { name: "Bán đảo Sơn Trà", link: "BanDaoSonTra.php" },
          //  { name: "Hội An", link: "HoiAn.php"},
            // Thêm các mục khác vào đây nếu cần
        ];

        inputSearch.addEventListener('keyup', (e) => {
            let checkData = e.target.value;
            let dataArray = [];
            if (checkData) {
                dataArray = recommendList.filter((data) => {
                    return data.name.toLowerCase().startsWith(checkData.toLowerCase());
                });
                dataArray = dataArray.map((data) => {
                    return '<li>' + data.name + '</li>';
                });
                showAddress(dataArray);
            } else {
                autoBox.innerHTML = ''; // Xóa gợi ý nếu ô nhập trống
            }
        });

        function showAddress(list) {
            let listData;
            if (!list.length) {
                listData = '<li>Không có kết quả</li>'; // Hiển thị thông báo khi không có kết quả
            } else {
                listData = list.join('');
            }
            autoBox.innerHTML = listData;

            // Thêm trình lắng nghe sự kiện cho mỗi mục danh sách
            autoBox.querySelectorAll("li").forEach((item) => {
                item.addEventListener('click', () => {
                    const searchQuery = item.textContent;
                    console.log('Kết quả tìm kiếm:', searchQuery);
                    // Tìm kiếm link tương ứng với kết quả và chuyển hướng
                    const result = recommendList.find((data) => data.name === searchQuery);
                    if (result) {
                        window.location.href = result.link;
                    }
                });
            });
        }

        searchForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Ngăn chặn gửi biểu mẫu và tải lại trang
            const searchQuery = searchInput.value;
            console.log('Kết quả tìm kiếm:', searchQuery);
            // Tiếp tục xử lý tìm kiếm ở đây
        });
    } else {
        // Xử lý lỗi nếu bất kỳ phần tử nào bị thiếu
        console.error("One or more required elements are missing.");
    }
});
