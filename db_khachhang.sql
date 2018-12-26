CREATE TABLE "khach_hang"
(
    "id" serial PRIMARY KEY,
    "ten_khach_hang" varchar(256) NOT NULL,
    "mat_khau character"varchar(256)  NOT NULL,
    "email" varchar(256)  NOT NULL,
    "dia_chi" varchar(256)  NOT NULL,
    "dien_thoai" varchar(256)  NOT NULL,
    CONSTRAINT khach_hang_pkey PRIMARY KEY (id)
);