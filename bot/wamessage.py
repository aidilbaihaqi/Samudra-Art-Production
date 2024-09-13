import pywhatkit
import pyautogui
import time

message = """Halo penonton pertunjukan “Harmoni Kata: Alih Wahana Sastra Melayu Klasik ke Laman Kreativitas Musik”, kami dari Panitia ingin mengingatkan kembali kepada anda bahwa pertunjukan dimulai pada

Hari/Tanggal : *Sabtu, 14 September 2024*
Mulai Pertunjukan : *20.00 WIB*

Dengan harapan besar dan mohon kerjasamanya kepada para penonton untuk dapat mengikuti beberapa peraturan berikut : 
1.	Memasuki gedung teater lewat pintu utama gedung mulai pukul 19.00 – 19.40 WIB
2.	Penonton yang sudah memiliki tiket melakukan registrasi ke meja registrasi dan dipersilahkan masuk ke Gedung untuk menempati kursi sesuai dengan nomor yang dipesan
3.	Penonton yang tidak memiliki atau kehabisan tiket tetap bisa menonton dan diarahkan masuk oleh panitia setelah kursi terpenuhi
4.	Penonton dilarang keras merokok (termasuk vape) di dalam ruangan
5.	Jika penampilan sudah dimulai, penonton diharapkan tenang dan diperbolehkan untuk mengambil dokumentasi dengan catatan tidak diperbolehkan menggunakan flash dan melakukan siaran langsung di media sosial
6.	Saat penampilan berlangsung penonton dilarang untuk bertepuk tangan atau membuat keributan.
7.	Penonton dilarang menyentuh mixer music, mixer lighting, mixer LED serta alat panggung lainnya di sekitar area panggung
8.	Setelah selesai, penonton diharapkan dapat keluar dengan tertib melalui pintu masuk
Apabila penonton melanggar beberapa peraturan diatas, kami dengan senang hati memberikan sedikit surprise kepada anda.

Jangan lupa datang dan Selamat Menikmati

Salam Hormat, 
Panitia Harmoni Kata
"""

message2 = """"""

phoneNumberTahap1 = [
'+6283823142553',
'+6281378309853',
'+6282170689291',
'+6282172374574',
'+6282172375465',
'+6281378305699',
'+6281267675554',
'+6285763765266',
'+6289530085491',
'+6281378884782',
'+6281374022807',
'+6285267085903',
'+6282387118668',
'+6283162862516',
'+6283188855380',
'+6289654381578',
'+6281212742747',
'+6285158846308',
'+6281238801018',
'+6281364344764',
'+6285182065664',
'+6285767806014',
'+6283183437722',
'+62895600551202',
'+6283115152782',
'+6285182065663',
'+6281371517189',
'+6282268979554',
'+6282211623238',
'+6281261267081',
'+6289668528200',
'+6281311721764',
'+6282374804977',
'+6282281748822',
'+6282169343384',
'+6282386856774',
'+6289519301180',
'+6282284649331',
'+6285389148022',
'+6283826131418',
'+6281927098468',
'+6282390337482',
'+6282194948114',
'+6283165010480',
'+6282283432507',
'+6287943302230',
'+6285830185441',
'+6283184716717',
'+6283176652695',
'+6281271983322',
'+6283896438117',
'+6283161567588',
'+6282384106596',
'+6283170864713',
'+6283164367798',
'+6283801602963',
'+6283809965656',
'+6283872321435',
'+62895385244187',
'+6283102652484',
'+6282288776042',
'+6283188854391',
'+6283875075716',
'+6282283598616',
'+6289668595800',
'+6283167623192',
'+6285667633472',
'+6282288967349',
'+6285363124465',
'+628172912422',] 

phoneNumberTahap2 = ['+6283148796357',
'+6282289051762',
'+6281372373831',
'+6281293182675',
'+6282391129420',
'+6285272642211',
'+6282173473876',
'+6282284158514'
'+6285762694925',
'+6282284650006',
'+6282285675388',
'+6282385558518',
'+62895603775148',
'+6283801263703',
'+6281275027733',
'+6281389060042',
'+6282391137506',
'+6282281940203',
'+62895600289719',
'+6281266183785',
'+6283809810645',
'+6282283611837',
'+6281275418394',
'+6287838239959',
'+6281261553039',
'+6285357556969',
'+6282283382710',
'+6282171364949',
'+6282175716483',
'+6282284744607',
'+6289654444602',
'+6281261351122',
'+6282283159755',
'+6281228227968',
'+6281374022806',
'+6281363718113',
'+628566240924',
'+6285203284568',
'+6289524931430',
'+6281374702155',
'+6281930416762',
'+6281271393283',
'+6282288222797',
'+628117714344',
'+6283801663353',
'+6283809783717',
'+6281364706185',
'+6281311062089',
'+628970800860',]


# def hitung_string(list_data):
#   jumlah_string = 0
#   for item in list_data:
#     if isinstance(item, str):
#       jumlah_string += 1
#   return jumlah_string

# hasil = hitung_string(phoneNumber)
# print("Jumlah Nomor: ", hasil)

for number in phoneNumberTahap1:
  pywhatkit.sendwhatmsg_instantly(number, message2, 10)
  time.sleep(4)
  pyautogui.click()
  time.sleep(4)
  pyautogui.press('enter')
  print(number + ' Done ✅')
  

print('All messages sent')