# Zavrsni_zadatak

Cilj zadatka je kreirati jednostavnu blog aplikaciju. Koristiće se starter projekat koji kloniramo pomoću git-a (već kreiran projekat sa postavljenim html-om i css-om na kojem nastavljamo rad). Home stranica treba da prikazuje listu svih postova, a klik na naslov treba da otvara stranicu sa pojedinačnim postom (za početak, svi postovi su hardcode-ovani). Na pojedinačnoj stranici ispod posta treba da bude forma za kreiranje komentara, a ispod svi komentari za taj post izlistani. 
Zadatak 1.

Klonirati repozitorijum gde se nalazi starter projekat: 
git clone https://gitlab.com/vivify-ideas/vivifyacademy-basic-blog-boilerplate.git
Uz pomoć predavača promeniti remote i komitovati na lični github nalog nakon svakog zadatka.

Zadatak 2.
 
Podeliti html u php template: razdvojiti header, footer i sidebar u posebne partial fajlove (header.php, footer.php, sidebar.php). Glavni sadrzaj postaviti u posebne stranice (posts.php, single-post.php, create-post.php, comments.php) koje će uključivati header, footer i sidebar. 

Zadatak 3.

U folderu styles kreirati file styles.css i uključiti ga na projekat. U ovom file-u pišemo naš custom css, to jest, menjamo (override-ujemo) postojeće bootstrapove stilove koje dobijamo iz fajla blog.css. Override radimo tako što “pojačavamo” selektore na već postojeće klase.
HTML i Css: 
Naslovi postova na home stranici treba da budu linkovi
Smanjiti veličinu fonta na celom projektu na 14px (html element)
Promeniti boju pozadine navbar-a: #b34848
Zameniti boju svih naslova (ne samo naslova postova) bojom #b34848
Naslovi postova na hover treba da ostanu iste boje, samo će dobiti underline.
Zadatak 4.

Kreirati bazu ‘blog’ u sql klijentu. 
Kreirati tabelu posts koja sadrzi sledeće kolone:

Id
Title
Body
Author
Created_at

Popuniti nekoliko zapisa ručno.  
Na posts.php stranici zameniti hard-kodovane postove i dovući postove iz baze. Postove poredjati po datumu, najnoviji post treba da se nalazi na vrhu.

Zadatak 5.

Implementirati otvaranje single-post stranice klikom na naslov posta (prikaz posta je identičan kao na stranici za listanje)
Dodati novu tabelu u bazu, “comments”, koja treba da sadrži:

Id
Author
Text
Post_id

Dodati nekoliko zapisa ručno u novu tabelu i implementirati dovlačenje komentara na single post stranicu, ispod post-a. Komentare implementirati kao unordered list (ul -> li) koje sadrži ime autora i tekst komentara. Komentari trebaju biti razdvojeni borderom (hr)

+
Napraviti novu stranicu create post koja ce u sebi sadrzati formu sa poljima Blog Post entiteta i submit button-om. Klik na ovaj button upisuje novi post u bazu. Sva polja su required.
Kreirajte novu tabelu author koja ce imati polja id, ime, prezime, pol .
Posts i Comments tabele ce imati referencu na author tabelu preko author_id polja (u posts necete cuvati vise author kao string)
dodati create author stranicu koja ce imati formu sa poljima za autora, isto kao za posts sva polja su required. Polje za pol treba da se sastoji od 2 radio button-a (ili check box-a kako vam je lakse) sa labelama M i Ž (samo jedan radio button moze biti selektovan)
na create post stranici umesto polja author sada cete prikazivati listu kreiranih autora, korisnik mora da selektuje jednog autora sa liste. U listi ce biti prikazani svi autori u formi Ime Prezime (obratite paznju da cete na kreiranju posta cuvati samo id authora)
Boja imena i prezimena autora u listi ce zavisti od pola - tekst ce biti plavi ako je u pitanju M autor, ili rozi ako je u pitanju Ž autor. Vidite kako bi dinamicki nakacili klasu na element
na single post stranici cete prikazivati autora iz authors tabele (po auhtor_id ) u obliku Ime Prezime (boja teksta takodje zavisi od pola)
dodati dugme Create post u header-u - klik na ovo dugme otvara create post stranicu

