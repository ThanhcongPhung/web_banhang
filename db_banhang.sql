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
(1, 'duongnguyen', 'test123@gmail.com', 'hanoi', '1231242341', 'test test test', '26[|||]1[|||||]'),
(2, 'duong hai nguyen', 'nguyenguyen123@gmail.com', 'hanoi, vietnam', '123456789000', 'test', '38[|||]0[|||||]14[|||]1[|||||]'),
(3, 'duong', 'test@gmail.com', 'vietnam', '012356789', 'aaaa', '39[|||]1[|||||]');

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

ALTER TABLE "san_pham" ADD FOREIGN KEY (thuoc_menu) REFERENCES menu_doc(id);

---------------------

INSERT INTO "san_pham" ("id", "ten", "gia", "hinh_anh", "noi_dung", "thuoc_menu", "noi_bat", "trang_chu", "sap_xep_trang_chu") VALUES
(1, 'Lẩu thập cẩm', 55000, '1.jpg', 'Lẩu thập cẩm là một món ăn ngon được rất nhiều người yêu thích, đây là sự kết hợp hài hòa giữa tất cả các loại nguyên liệu lại với nhau tạo cho món ăn có một mùi vị thơm lừng chua cay ngất ngây', 4, 'co', '', 0),
(2, 'Gân bò dầm cóc', 82000, '3.jpg', 'Gân bò dầm cóc chua cay với vị chua của cóc cùng với miếng gân bò giòn dai sần sật được kết hợp với nước mắm ớt tỏi xen lẫn vị thơm của gừng.', 3, '', 'co', 7),
(3, 'Gà rán sốt', 86000, '1_2.jpg', 'Gà chiên giòn sốt ngọt thơm phức, vỏ giòn thịt bên trong mềm ngon, ai thưởng thức cũng cảm thấy hấp dẫn, ăn hoài chẳng chán.', 1, '', '', 0),
(4, 'Hamburger gà', 97000, '1_3.jpg', 'Với vị bánh thơm mềm mại hòa quyện cùng với lớp nhân thịt đậm đà, rau xà lách giòn giòn và cà chua tươi mát tạo nên một hương vị không khó quên trong lòng người ăn.', 2, 'co', 'co', 3),
(5, 'Nem lụi Nha Trang', 42000, '1_4.jpg', 'Nem lụi Nha Trang', 1, '', '', 0),
(6, 'Lẩu mì', 100000, '1_5.jpg', 'Lẩu mì thơm ngon hấp dẫn ngày đông sẽ là món ăn mới lạ mà cả nhà đều thích.', 4, '', 'co', 0),
(7, 'Ðùi gà chiên', 120000, '1_6.jpg', 'Đùi gà chiên giòn mà ăn lúc nóng sẽ có hương vị thật thơm ngon, lớp da bên ngoài giòn rụm, bên trong thịt mềm và chín đều chấm cùng tương ớt thì tuyệt cú mèo.', 2, 'co', 'co', 2),
(8, 'Lẩu thịt bò', 80000, '1_7.jpg', 'Lẩu bò là món ngon hợp với khẩu vị của nhiều người.', 4, 'co', '', 0),
(9, 'Bún riêu cua', 160000, '1_8.jpg', 'Bún riêu cua là món ăn có thể thưởng thức bất kì mùa nào trong năm, không những đầy dinh dưỡng, giàu chất đạm mà còn rất ngon miệng.', 1, '', '', 0),
(10, 'Gà nướng', 160000, '1_9.jpg', 'Gà nướng có lớp ngoài vàng ruộm đẹp mắt và khi ăn da gà giòn tan, thịt vẫn giữ được độ ngọt và thơm mùi đặc trưng của ngũ vị hương. ', 1, '', 'co', 7),
(11, 'Sườn nướng', 135000, '1_10.jpg', 'Với những bữa ăn ngoài trời hay bưã ăn nhân ngày hội họp, món sườn nướng thơm ngon, hấp dẫn thường là sự lựa chọn hoàn hảo cho tất cả mọi người.', 1, '', 'co', 0),
(12, 'Bánh bột lọc', 55000, '1_11.jpg', 'Bánh bột lọc là đặc trưng của xứ Huế được nhiều người yêu thích với nhân tôm thịt và thường được luộc trần chấm mắm hay gói trong lá chuối.', 3, '', 'co', 13),
(13, 'Mỳ gà quay xá xíu', 72000, '1_12.jpg', 'Gà quay xá xíu được tẩm ướp đầy đủ hương vị nhất là màu sắc thịt gà đỏ nâu nổi bậc màu đặc trung của xá xíu, được quay chín tới thơm phúc nóng hổi.', 1, 'co', '', 0),
(14, 'Com gà chiên', 78000, '1_13.jpg', 'Cơm gà chiên là một món ăn phổ biến tại hầu hết ở nhà hàng các nước trên thế giới và điển hình là Trung Quốc. Đây cũng là một món ăn tuyệt vời có khả năng làm vừa lòng nhiều đối tượng thực khách.', 1, '', 'co', 11),
(15, 'Sườn nướng', 123000, '1_14.jpg', 'Ngày cuối tuần trời mưa se lạnh, có đĩa sườn nướng nóng hổi cay ngọt trên mâm cơm thì tuyệt cú mèo', 1, '', 'co', 0),
(16, 'Mì gà chiên', 125000, '1_15.jpg', 'Mì gà chiên', 1, 'co', 'co', 5),
(17, 'Mỳ đen Jajangmyeon', 99000, '1_16.jpg', 'Mỳ tương đen Jajangmyeon là món ăn Hàn Quốc có truyền thống từ Trung Hoa, thành phần chính trong đó là tương đen lên men và sợi mỳ. Đây là món ăn rất phổ biến ở đất nước Hàn đến nỗi, dạo 1 vòng quanh các khu ẩm thực Trung Hoa tại đất nước này, không khó để bắt gặp rất nhiều biến thể của mỳ Jajangmyeon.', 1, '', '', 0),
(18, 'Sườn nướng phô mai', 145000, '1_17.jpg', 'Sườn nướng phô mai không những đặc biệt ở lớp phủ phô mai kéo sợi béo ngon mà còn ở phần sườn được tẩm ướp kĩ càng, đậm đà ăn ngon quên sầu!', 1, '', 'co', 1),
(19, 'Phở xào', 145000, '1_18.jpg', 'Phở xào là món ăn khoái khẩu của không ít gia đình Việt vì cách chế biến đơn giản và dễ biến tấu với nhiều nguyên liệu khác nhau.', 1, '', '', 0),
(20, 'Tokbokki cay', 170000, '1_19.jpg', 'Tokbokki cay hay còn gọi là bánh gạo cay là một món ăn truyền thống của Hàn Quốc mà mỗi du khách đến đất nước này đều muốn thưởng thức.', 2, '', '', 0),
(21, 'Bò bít tết', 85000, '1_20.jpg', 'Bò bít tết là món ăn sang trọng, miếng thịt bò to, thơm ngon, bên trong vẫn còn màu hồng đỏ hấp dẫn.', 1, 'co', 'co', 0),
(22, 'Vịt quay', 300000, '3_2.jpg', 'Trong số các món ngon từ vịt không thể bỏ qua món vịt quay, vịt quay không chỉ phổ biến trong những bữa ăn hằng ngày mà còn xuất hiện ở hầu hết các mâm cỗ tiệc.', 1, '', 'co', 8),
(23, 'Kem xôi', 40000, '3_3.jpg', 'Sự kết hợp độc đáo giữa hai thứ đồ vốn "chả liên quan gì đến nhau" lại cho ra đời một món ăn vô cùng hấp dẫn mà trong những ngày hè oi ả thế này không thể bỏ qua, đó chính là kem xôi.', 3, '', '', 6),
(24, 'Chè đậu đỏ', 50000, '3_4.jpg', 'Chè đậu đỏ là một trong những món chè dân dã của người Việt, một món ăn không những ngon mà còn có tác dụng thanh nhiệt giải độc cho cơ thể.', 3, '', '', 0),
(25, 'Chocolate kem', 60000, '3_5.jpg', 'Đắng nồng nàn, ngọt ma mị. Chocolate luôn là một trong những hương vị được ưa chuộng nhất thế giới. Kem chocolate càng là sự kết hợp tuyệt vời, ẩn sức sức hấp dẫn khó cưỡng.', 3, '', '', 9),
(26, 'Bánh kem trái cây', 70000, '3_6.jpg', 'Sự kết hợp của chúng ta đã tạo nên những điều kỳ diệu, đó là những chiếc bánh kem sinh nhật trái cây, bánh kem trái cây tươi hay bánh kem trái cây đẹp mắt. Sự hòa quyện giữa kem và trái cây sao mà ấm áp đến vậy.', 3, '', 'co', 12),
(27, 'Kem dâu tây', 80000, '3_7.jpg', 'Kem dâu tây có vị chua ngọt vừa phải, thơm nức mùi dâu tây. Chắc chắn cả gia đình bạn sẽ vô cùng thích thú khi được thưởng thức loại kem mát lạnh này.', 3, '', '', 0),
(28, 'Thạch', 90000, '3_8.jpg', 'Thạch rau câu là một món tráng miệng rất ngon và mát vào mùa hè và là một trong những món tráng miệng rất được ưa chuộng.', 3, '', '', 8),
(29, 'Cháo trai', 100000, '3_9.jpg', 'Cháo trai là một món ăn ngon và bổ dưỡng, rất dễ ăn lại tốt cho sức khỏe của cả gia đình.', 3, '', '', 0),
(30, 'Bánh trôi tàu', 110000, '3_10.jpg', 'Bánh trôi tàu luôn là một trong những món ăn đắt hàng nhất trong mùa đông giá rét. Với nước đường ngọt lịm và thơm mùi gừng, bánh trôi nhân vừng đen hoặc đậu xanh thơm lừng, bánh trôi tàu nóng hổi luôn làm cho những ngày mùa đông ấm áp hơn', 3, '', '', 7),
(31, 'Sushi', 120000, '3_11.jpg', 'Sushi là món ăn truyền thống của người Nhật, được làm từ cơm trộn giấm kết hợp với các loại thịt, cá, hải sản và rau củ quả tươi.', 2, '', 'co', 9),
(32, 'Chocolate hạnh nhân', 50000, '3_12.jpg', 'Chocolate hạnh nhân là món điểm tâm vừa thơm ngon, lạ rất bổ dưỡng. Hạnh nhân là loại thực phẩm quý, chứa nhiều chất dinh dưỡng, có rất nhiều tác dụng giúp chị em làm đẹp.', 3, '', '', 12),
(33, 'Bánh gừng', 60000, '3_13.jpg', 'Bánh gừng không chỉ ngon mà còn có hình dáng và cách trang trí vô cùng phong phú, thể hiện sự sáng tạo của người làm ra nó.', 3, '', '', 1),
(34, 'Brownies tuần lộc', 70000, '3_14.jpg', 'Brownies tuần lộc', 3, '', '', 11),
(35, 'Chocolate quả khô', 80000, '3_15.jpg', 'Chocolate quả khô', 3, '', '', 0),
(36, 'Dâu ông già Noel', 90000, '3_16.jpg', 'Từ những quả dâu tây đỏ mọng, bạn có thể tạo hình thành ông già Noel với hàm râu trắng muốt đáng yêu.', 3, '', '', 16),
(37, 'Bánh khúc cây', 170000, '3_171.jpg', 'Bánh khúc cây - Buche de Noel là món tráng miệng không thể thiếu trong dịp Giáng Sinh', 3, '', '', 15),
(38, 'Chè thập cẩm', 180000, '3_18.jpg', 'Cách nấu chè thập cẩm ở mỗi miền đều có những nét khác biệt, những gia vị, nguyên liệu độc đáo để tạo ra những hương vị đặc trưng nổi bật.', 3, '', '', 0),
(39, 'Tokbokki', 190000, '3_19.jpg', 'Với hương vị cay cay the the đặc trưng của kim chi, vị ngọt của bánh tok, hương thơm cùng chút giòn dai từ chả cá và một số món ăn kèm, tất cả hòa quyện mang đến nồi lẩu thơm ngon, hấp dẫn.', 2, 'co', '', 0),
(40, 'Thịt nướng nem lụi', 250000, '3_20.jpg', 'Những chiếc nem cùng thịt được tẩm ướp gia vị đặc biệt và nướng chín thơm phức, vàng ươm rất bắt mắt, chắc chắn sẽ khiến bạn khó mà từ chối được.', 2, '', 'co', 2),
(41, 'Trà sữa dâu tây', 35000, '5_1.jpg', 'Trà sữa dâu tây là thức uống đơn giản được pha chế hoàn tất chỉ trong tích tắc. Vị trà sữa béo ngọt, chua chua, thơm và màu sắc hơi hường của dâu tây rất tuyệt.', 5, '', 'co', 1),
(42, 'Kiwi đá xay', 40000, '5_2.jpg', 'Kiwi đá xay là sự kết hợp hoàn hảo của kiwi và sữa mang đến hương vị chua ngọt và thơm mát. Không những thế, kiwi là loại hoa quả thơm ngon và rất tốt cho cơ thể.', 5, '', '', 1),
(43, 'Trà dứa', 41000, '5_3.jpg', 'Trà dứa là sự kết hợp của trà xanh, lá dứa và trà tiên, từ đó tạo ra một thức uống với hương thơm quyến rũ.', 5, '', '', 1),
(44, 'Cappuchino socola', 38000, '5_4.jpg', 'Balancing sweet and nutty flavors, our Chocolate Cappuccino coffee is a perfect treat for those who love a little something sweet in the evening.', 5, '', '', 1),
(45, 'Cappuchino trà xanh', 38000, '5_5.jpg', 'Cappuchino trà xanh với hương vị thơm ngon, tươi mát của trà xanh và kem sữa tươi hòa quyện, tinh tế. ', 5, '', '', 1),
(46, 'Hồng trà sữa', 30000, '5_6.jpg', 'Trong những ngày hè oi bức, một ly hồng trà sữa mát lạnh là cách giải nhiệt và thư giãn tuyệt vời.', 5, '', '', 1);


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
    "anh_dai_dien" varchar(256) NOT NULL,
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
