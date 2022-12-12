CREATE VIEW TransaksidenganVoucher AS
SELECT tabel.id as Transaksi_ID, tabel.productid as Product_ID,product.Nama as Product_Nama, tabel.Voucher_ID as Voucher_ID, voucher.Judul as Voucher_Judul,
voucher.Deskripsi as Voucher_Deskripsi
FROM form_transactions tabel
LEFT JOIN formvouchers voucher on voucher.id = tabel.Voucher_ID
LEFT JOIN form_products product on product.id = tabel.productid