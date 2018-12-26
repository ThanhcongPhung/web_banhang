CREATE TABLE "hoa_don" (
  "id" serial primary key,
  "ten_nguoi_mua" varchar(256) NOT NULL,
  "email" varchar(256) NOT NULL,
  "dia_chi" text NOT NULL,
  "dien_thoai" varchar(256) NOT NULL,
  "noi_dung" text NOT NULL,
  "hang_duoc_mua" text NOT NULL
);

------------------------------------------------------

INSERT INTO "hoa_don" ("id", "ten_nguoi_mua", "email", "dia_chi", "dien_thoai", "noi_dung", "hang_duoc_mua") VALUES
(1, 'duonggngngn', 'easdasdasd@fasdf', 'asdasda', '1231242341', 'masdfnuweyransdf', '26[|||]1[|||||]'),
(2, 'duong hai nguyen', 'nguyenguyen123@gmail.com', 'hanoi, vietnam', '123456789000', 'aaaabbbbssssssssssssss', '38[|||]0[|||||]14[|||]1[|||||]'),
(3, 'a', 'a', 'a', 'a', 'a', '39[|||]1[|||||]'),
(4, '12333', '123123@gmail.com', '2222222', '789456123', '', '32[|||]1[|||||]');

-- --------------------------------------------------------

--
-- C?u trúc b?ng cho b?ng `menu_doc`
--

CREATE TABLE "menu_doc" (
  "id" serial primary key,
  "ten" varchar(256) NOT NULL
);

-----------------------------------

INSERT INTO "menu_doc" ("id", "ten") VALUES
(1, 'Món chính'),
(2, 'Món ăn kèm'),
(3, 'Món tráng miệng'),
(4, 'Món lẩu'),
(5, 'Thức uống');

-- --------------------------------------------------------


CREATE TABLE "quang_cao" (
  "id" serial primary key,
  "html" text NOT NULL,
  "vi_tri" varchar(256) NOT NULL
);

---------------------------------

INSERT INTO "quang_cao" ("id", "html", "vi_tri") VALUES
(1, '<p style=\"text-align: center;\"><a href=\"#\"><img src=\"/ban_hang/hinh_anh/tinymce/300x250--CB500741502--QHNWY._V500767121__.jpg\" alt=\"\" width=\"149\" height=\"124\" /></a></p>\r\n<p style=\"text-align: center;\"><a href=\"#\"><img src=\"/ban_hang/hinh_anh/tinymce/1133965-amazon-student-ad-300x250-RY8Gm._V486506299__1.jpg\" alt=\"\" width=\"152\" height=\"127\" /></a></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><a href=\"#\">&nbsp;</a></p>', 'trai'),
(2, '<p style=\"text-align: center;\"><img src=\"/ban_hang/hinh_anh/tinymce/51PxlzuytWL.jpg\" alt=\"\" width=\"200\" height=\"283\" /></p>', 'phai');

-- --------------------------------------------------------



CREATE TABLE "san_pham" (
  "id" serial primary key,
  "ten" varchar(256)  NOT NULL,
  "gia" int NOT NULL,
  "hinh_anh" varchar(256)  NOT NULL,
  "noi_dung" text  NOT NULL,
  "thuoc_menu" int NOT NULL,
  "noi_bat" varchar(256)  NOT NULL,
  "trang_chu" varchar(256) NOT NULL,
  "sap_xep_trang_chu" int NOT NULL
);

---------------------

INSERT INTO "san_pham" ("id", "ten", "gia", "hinh_anh", "noi_dung", "thuoc_menu", "noi_bat", "trang_chu", "sap_xep_trang_chu") VALUES
(1, 'Lẩu thập cẩm', 55000, '1.jpg', 'Nội dung của sản phẩm 1', 4, 'co', '', 0),
(2, 'Gân bò dầm cóc', 82000, '3.jpg', 'Nội dung của sản phẩm 3', 3, '', 'co', 7),
(3, 'Gà rán sốt', 86000, '1_2.jpg', 'Nội dung của sản phẩm 1_2', 1, '', '', 0),
(4, 'Hamburger gà', 97000, '1_3.jpg', 'Nội dung của sản phẩm 1_3', 2, 'co', 'co', 3),
(5, 'Nem lụi Nha Trang', 42000, '1_4.jpg', 'Nội dung của sản phẩm 1_4', 1, '', '', 0),
(6, 'Lẩu mì', 100000, '1_5.jpg', 'Nội dung của sản phẩm 1_5', 4, '', 'co', 0),
(7, 'Ðùi gà chiên', 120000, '1_6.jpg', 'Nội dung của sản phẩm 1_6', 2, 'co', 'co', 2),
(8, 'Lẩu thịt bò', 80000, '1_7.jpg', 'Nội dung của sản phẩm 1_7', 4, 'co', '', 0),
(9, 'Bún riêu cua', 160000, '1_8.jpg', 'Nội dung của sản phẩm 1_8', 1, '', '', 0),
(10, 'Gà quay', 160000, '1_9.jpg', 'Nội dung của sản phẩm 1_9', 1, '', 'co', 7),
(11, 'Sườn nướng', 135000, '1_10.jpg', '<p>Nội dung của sản phẩm 1_10</p>', 1, '', 'co', 0),
(12, 'Bánh bột lọc', 55000, '1_11.jpg', '<p>Nội dung của sản phẩm 1_11</p>', 3, '', 'co', 13),
(13, 'Mỳ gà quay xá xíu', 72000, '1_12.jpg', '<p>Nội dung của sản phẩm 1_12</p>', 1, 'co', '', 0),
(14, 'Com gà chiên', 78000, '1_13.jpg', '<p>Nội dung của sản phẩm 1_13</p>', 1, '', 'co', 11),
(15, 'Sườn nướng', 123000, '1_14.jpg', '<p>Nội dung của sản phẩm 1_14</p>', 1, '', 'co', 0),
(16, 'Mì gà chiên', 125000, '1_15.jpg', '<p>Nội dung của sản phẩm 1_15</p>', 1, 'co', 'co', 5),
(17, 'Mỳ đen Jajangmyeon', 99000, '1_16.jpg', 'Nội dung của sản phẩm 1_16', 1, '', '', 0),
(18, 'Sườn nướng phô mai', 145000, '1_17.jpg', '<p>Nội dung của sản phẩm 1_17</p>', 1, '', 'co', 1),
(19, 'Phở xào', 145000, '1_18.jpg', 'Nội dung của sản phẩm 1_18', 1, '', '', 0),
(20, 'Tokbokki cay', 170000, '1_19.jpg', '<p>Nội dung của sản phẩm 1_19</p>', 2, '', '', 0),
(21, 'Bò bít tết', 85000, '1_20.jpg', '<p>Nội dung của sản phẩm 1_20</p>', 1, 'co', 'co', 0),
(22, 'Vịt quay', 300000, '3_2.jpg', '<p>Nội dung của sản phẩm 3_2</p>', 1, '', 'co', 8),
(23, 'Kem xôi', 40000, '3_3.jpg', 'Nội dung của sản phẩm 3_3', 3, '', '', 6),
(24, 'Chè đậu đỏ', 50000, '3_4.jpg', 'Nội dung của sản phẩm 3_4', 3, '', '', 0),
(25, 'Chocolate kem', 60000, '3_5.jpg', 'Nội dung của sản phẩm 3_5', 3, '', '', 9),
(26, 'Bánh kem trái cây', 70000, '3_6.jpg', '<p>Nội dung của sản phẩm 3_6</p>', 3, '', 'co', 12),
(27, 'Kem dâu tây', 80000, '3_7.jpg', 'Nội dung của sản phẩm 3_7', 3, '', '', 0),
(28, 'Thạch', 90000, '3_8.jpg', '<p>Nội dung của sản phẩm 3_8</p>', 3, '', '', 8),
(29, 'Cháo trai', 100000, '3_9.jpg', 'Nội dung của sản phẩm 3_9', 3, '', '', 0),
(30, 'Bánh trôi tàu', 110000, '3_10.jpg', 'Nội dung của sản phẩm 3_10', 3, '', '', 7),
(31, 'Sushi', 120000, '3_11.jpg', '<p>Nội dung của sản phẩm 3_11</p>', 2, '', 'co', 9),
(32, 'Chocolate hạnh nhân', 50000, '3_12.jpg', 'Nội dung của sản phẩm 3_12', 3, '', '', 12),
(33, 'Bánh gừng', 60000, '3_13.jpg', '<p>Nội dung của sản phẩm 3_13</p>', 3, '', '', 1),
(34, 'Brownies tuần lộc', 70000, '3_14.jpg', 'Nội dung của sản phẩm 3_14', 3, '', '', 11),
(35, 'Chocolate quả khô', 80000, '3_15.jpg', '<p>Nội dung của sản phẩm 3_15</p>', 3, '', '', 0),
(36, 'Dâu ông già Noel', 90000, '3_16.jpg', 'Nội dung của sản phẩm 3_16', 3, '', '', 16),
(37, 'Bánh khúc cây', 170000, '3_171.jpg', '<p>Nội dung của sản phẩm 3_17</p>', 3, '', '', 15),
(38, 'Chè thập cẩm', 180000, '3_18.jpg', '<p>Nội dung của sản phẩm 3_18</p>', 3, '', '', 0),
(39, 'Tokbokki', 190000, '3_19.jpg', '<p>Nội dung của sản phẩm 3_19</p>', 2, 'co', '', 0),
(40, 'Thịt nướng nem lụi', 250000, '3_20.jpg', '<p>Nội dung của sản phẩm 3_20</p>', 2, '', 'co', 2),
(41, 'Trà sữa dâu tây', 35000, '5_1.jpg', '<p>Nội dung của sản phẩm5_1</p>', 5, '', 'co', 1),
(42, 'Kiwi đá xay', 40000, '5_2.jpg', '<p>Nội dung của sản phẩm 5_2</p>', 5, '', '', 1),
(43, 'Trà dứa', 41000, '5_3.jpg', '<p>Nội dung của sản phẩm 5_3</p>', 5, '', '', 1),
(44, 'Cappuchino socola', 38000, '5_4.jpg', '<p>Nội dung của sản phẩm 5_4</p>', 5, '', '', 1),
(45, 'Cappuchino trà xanh', 38000, '5_5.jpg', '<p>Nội dung của sản phẩm 5_5</p>', 5, '', '', 1),
(46, 'Hồng trà sữa', 30000, '5_6.jpg', '<p>Nội dung của sản phẩm 5_6</p>', 5, '', '', 1);


-- --------------------------------------------------------


CREATE TABLE "slideshow" (
  "id" serial primary key,
  "hinh" varchar(256) NOT NULL,
  "lien_ket" varchar(256) NOT NULL
);

----------------------------------------------
INSERT INTO "slideshow" ("id", "hinh", "lien_ket") VALUES
(1, 'a_1.png', '#'),
(2, 'a_2.png', '#'),
(3, 'a_3.png', '#'),
(4, 'a_4.png', '#');

-- --------------------------------------------------------


CREATE TABLE "thong_tin_quan_tri" (
  "id" serial primary key,
  "ky_danh" varchar(256)  NOT NULL,
  "mat_khau" varchar(256) NOT NULL
);

---------------------------------------------------

INSERT INTO "thong_tin_quan_tri" ("id", "ky_danh", "mat_khau") VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3');

-------------------------------------------------

CREATE TABLE "khach_hang"
(
    "id" serial PRIMARY KEY,
    "ten_khach_hang" varchar(256) NOT NULL,
    "mat_khau" varchar(256)  NOT NULL,
    "email" varchar(256)  NOT NULL,
    "dia_chi" varchar(256)  NOT NULL,
    "dien_thoai" varchar(256)  NOT NULL
); 

ALTER TABLE "khach_hang" ADD UNIQUE (ten_khach_hang);

------------------------------------------- 

CREATE TABLE "review" (
  "id" int primary key,
  "username"  varchar(256) NOT NULL,
  "sp_id" int NOT NULL,
  "star" int NOT NULL,
  "comment" varchar(256) NOT NULL,
  foreign key ("username") references "khach_hang" ("ten_khach_hang"),
  foreign key ("sp_id") references "san_pham" ("id")
);
