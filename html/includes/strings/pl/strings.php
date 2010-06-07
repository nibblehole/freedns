<?
$l['str_content_type'] = "utf-8";
$l['str_primary_looking_for_zone_x'] = "Szukana strefa %s";
$l['str_secondary_after_modif_add_to_configfile'] = "zmodyfikować konfigurację Twojego serwera DNS, żeby pozwalał na transfery do naszych serwerów DNS (dotyczy tylko jeśli Twój podstawowy serwer DNS jest oparty na bind)";
$l['str_secondary_after_modif_add_lines_to_zonefile'] = "dodać następujące linie do Twojej strefy (z kończącymi kropkami)";
$l['str_secondary_after_modif_be_sure_to'] = "Upewnij się, żeby";
$l['str_secondary_zone_successfully_modified_on_x'] = "Strefa została zmodyfikowane na %s.";
$l['str_secondary_your_zone_will_not_be_available'] = "Twoja strefa nie będzie dostępna po kolejnym przeładowaniu. Wróć później i zmodyfikuj ją jeszcze raz.";
$l['str_secondary_invalid_list_of_allowtransfer'] = "Błędna lista adresów IP serwerów, które mogą dokonywać transferów strefy. Jeśli chcesz wpisać kilka adresów IP, rozdziel je średnikiem.";
$l['str_secondary_non_blocking_warning_x_will_not_serve'] = "To ostrzeżenie nie powoduje niemożności rejestracji Twej strefy -- ale napraw ten błąd jak najszybciej, w przeciwnym wypadku %s nie będzie mógł poprawnie obsługiwać Twej strefy.";
$l['str_trying_to_dig_from_x_returned_status_x'] = "polecenie 'dig %s' zwróciło: %s";
$l['str_dig_result_BADTIME'] = "bad time";
$l['str_dig_result_BADKEY'] = "bad key";
$l['str_dig_result_NOTZONE'] = "not in zone";
$l['str_dig_result_BADSIG'] = "bad signature";
$l['str_dig_result_YXRRSET'] = "rrset exists";
$l['str_dig_result_NOTAUTH'] = "rrset doesn't exist";
$l['str_dig_result_REFUSED'] = "refused";
$l['str_dig_result_YXDOMAIN'] = "domain name exists";
$l['str_dig_result_NOTIMP'] = "not implemented";
$l['str_dig_result_NXDOMAIN'] = "no such domain name";
$l['str_dig_result_FORMERR'] = "format error";
$l['str_dig_result_SERVFAIL'] = "server failed";
$l['str_dig_result_NOERROR'] = "no error";
$l['str_secondary_if_you_want_two_primary'] = "Jeśli chcesz używać 2 podstawowych serwerów DNS, oddziel adresy IP średnikiem";
$l['str_secondary_you_must_provide_a_primary'] = "musisz podać podstawowy serwer DNS";
$l['str_secondary_your_primary_should_be_an_ip'] = "podstawowy serwer DNS musi być podany jako adres IP";
$l['str_secondary_modify_button'] = "Modyfikuj";
$l['str_secondary_allow_transfer_master_and_ip'] = "podstawowemu serwerowi DNS oraz (użyj średnika jako separatora)";
$l['str_secondary_allow_tranfer_all'] = "wszystkim";
$l['str_secondary_allow_transfer_master_only'] = "tylko podstawowemu serwerowi DNS";
$l['str_secondary_allow_transfer_from'] = "Zezwól na transfer ";
$l['str_secondary_primary_ns_ip'] = "Adres(y) IP podstawowego serwera DNS<br>(użyj średnika jako separatora)";
$l['str_secondary_be_sure_that_name_server_is_auth'] = "Upewnij się, że nameserver jest autorytatywny dla Twojej strefy.";
$l['str_primary_serial'] = "numer seryjny";
$l['str_primary_soa_invalid_xfer'] = "błędna lista adresów IP serwerów, które mogą dokonywać transferów strefy. Jeśli chcesz wpisać kilka adresów IP, rozdziel je średnikiem.";
$l['str_primary_delegate_bad_limits_x_x_overlaps_existing_x_x'] = "Zły limit zakresu: %s-%s zawiera się w istniejącym zakresie %s-%s";
$l['str_primary_delegate_user_x_doesnot_exist'] = "użytkownik %s nie istnieje";
$l['str_primary_bad_limits_x_x'] = "Zły limit zakresu: %s-%s";
$l['str_primary_no_user_for_delegation'] = "brak użytkownika do wydelegowania";
$l['str_primary_bad_upper_limit_x'] = "Zły górny limit zakresu %s";
$l['str_primary_bad_lower_limit_x'] = "Zły dolny limit zakresu %s";
$l['str_primary_adding_delegate_x_x'] = "Dodaję rekord DELEGATE %s-%s";
$l['str_primary_no_ns_x'] = "Brak rekordu NS dla %s";
$l['str_primary_adding_zone_ns_x'] = "Dodaję rekord NS %s";
$l['str_primary_warning_a_x_exists_not_overwritten'] = "Uwaga: rekord A dla %s już istnieje -- nie został nadpisany";
$l['str_primary_adding_cname_x'] = "Dodaję rekord CNAME %s";
$l['str_primary_adding_www_x_x'] = "Dodaję rekord WWW (%s) %s";
$l['str_primary_bad_www_value_x'] = "nieprawidłowa zawartość rekordu WWW %s";
$l['str_primary_bad_www_x'] = "zła nazwa WWW %s.";
$l['str_primary_www_redirect'] = "przekierowanie czasowe";
$l['str_primary_www_redirect_301'] = "przekierowanie stałe";
$l['str_primary_www_frame'] = "ramka";
$l['str_primary_www_address'] = "Adres WWW";
$l['str_primary_no_record_x'] = "Brak wpisu dla %s";
$l['str_primary_warning_ptr_x_exists_with_diff_value'] = "Uwaga: rekord PTR dla %s już istnieje z inną wartością. Zakładam, że chcesz mieć kilka rekordów wskazujących na ten sam adres (aka Round Robin) ";
$l['str_primary_warning_ptr_x_already_exists_not_overwritten'] = "Uwaga: rekord PTR dla %s już istnieje, wskazując na tę samą nazwę -- nie został nadpisany";
$l['str_primary_adding_ptr_x'] = "Dodaję rekord PTR %s";
$l['str_primary_x_name_has_to_be_fully_qualified_x'] = "nazwa, na którą wskazuje %s musi być bezwzględna (z domeną i kończącą kropką): %s";
$l['str_primary_no_name_for_x'] = "Brak NAZWY dla %s";
$l['str_primary_bad_ptr_x'] = "zły rekord PTR %s";
$l['str_primary_aaaa_x_with_same_ip'] = "Uwaga: rekord AAAA dla %s już istnieje z tym samym IP -- nie został nadpisany";
$l['str_primary_warning_aaaa_x_exists_with_diff_value'] = "Uwaga: rekord AAAA dla %s już istnieje z inną wartością. Zakładam, że chcesz mieć kilka rekordów wskazujących na ten sam adres (aka Round Robin) ";
$l['str_primary_adding_aaaa_x'] = "Dodaję rekord AAAA %s";
$l['str_primary_x_ip_has_to_be_ipv6'] = "Adres %s musi być poprawnym adresem IPv6";
$l['str_primary_aaaa_bad_aaaa_x'] = "zły rekord AAAA %s";
$l['str_primary_no_ipv6_for_x'] = "Brak adresu IPv6 dla %s";
$l['str_primary_a_x_with_same_ip'] = "Uwaga: rekord A dla %s już istnieje z tym samym IP -- nie nadpisuję";
$l['str_primary_warning_a_x_exists_with_diff_value'] = "Uwaga: rekord A dla %s już istnieje z inną wartością. Zakładam, że chcesz mieć kilka rekordów wskazujących na ten sam adres (aka Round Robin) ";
$l['str_primary_warning_cname_x_exists_not_overwritten'] = "Uwaga: rekord CNAME dla %s już istnieje -- nie został nadpisany";
$l['str_primary_not_managed_by_x'] = "Nie zarządzana przez %s";
$l['str_primary_main_zone_not_managed_by_you'] = "główna strefa nie jest zarządzana przez Ciebie... sprawdzanie delegacji.";
$l['str_primary_reverse_exists_but_ip_not_manageable'] = "strefa odwrotna istnieje, ale to IP nie jest w bloku adresów, którymi możesz zarządzać";
$l['str_primary_zone_managed_by_you'] = "główna strefa zarządzana przez Ciebie";
$l['str_primary_record_exists_assuming_rr'] = "Rekord już istnieje... zakładam, że chcesz robić Round Robin";
$l['str_primary_looking_for_reverse'] = "Sprawdzanie strefy odwrotnej";
$l['str_primary_adding_a_x'] = "Dodawanie rekordu A %s";
$l['str_primary_x_ip_has_to_be_ip'] = "adres serwera %s musi być poprawnym adresem IP";
$l['str_primary_bad_a_x'] = "zły rekord A %s";
$l['str_primary_no_ip_for_x'] = "Brak adresu IP dla %s";
$l['str_primary_warning_ns_x_exists_not_overwritten'] = "Uwaga: rekord NS dla %s już istnieje -- nie został nadpisany";
$l['str_primary_adding_ns_x'] = "Dodawanie rekordu NS %s";
$l['str_primary_bad_ns_x'] = "zła nazwa NS %s";
$l['str_primary_warning_mx_x_exists_not_overwritten'] = "Uwaga: rekord MX %s już istnieje -- nie został nadpisany";
$l['str_primary_adding_mx_x'] = "Dodawanie rekordu MX %s";
$l['str_primary_preference_for_mx_x_has_to_be_int'] = "numer preferencyjny dla rekordu MX %s musi być liczbą naturalną";
$l['str_primary_data_error'] = "Błąd danych";
$l['str_primary_bad_mx_name_x'] = "zła nazwa MX %s";
$l['str_primary_ok'] = "OK";
$l['str_primary_deleting_sub_zone_x'] = "Kasowanie podstrefy %s";
$l['str_primary_deleting_ok'] = "OK";
$l['str_primary_deleting_aaaa_x'] = "Kasowanie rekordu AAAA %s";
$l['str_primary_deleting_ptr_x'] = "Kasowanie rekordu PTR %s";
$l['str_primary_deleting_ns_x'] = "Kasowanie rekordu NS %s";
$l['str_primary_deleting_mx_x'] = "Kasowanie rekordu MX %s";
$l['str_primary_deleting_cname_x'] = "Kasowanie rekordu CNAME %s";
$l['str_primary_deleting_a_x'] = "Kasowanie rekordu A %s";
$l['str_can_not_open_x_for_writing'] = "nie mogę otworzyć pliku %s do zapisu";
$l['str_can_not_open_x_for_reading'] = "nie mogę otworzyć pliku %s do odczytu";
$l['str_primary_trouble_occured_when_checking'] = "Wystąpił jakiś problem przy sprawdzaniu tego pliku";
$l['str_primary_error_if_engine_error_x_contact_admin_x'] = "Możesz wrócić do strony modyfikacji, żeby to poprawić (kliknij na strefę po lewej stronie).<p > Jeśli uważasz, że to problem systemu, %sskontaktuj się z administratorem%s.";
$l['str_primary_zone_error_warning'] = "W trakcie sprawdzania konfiguracji wystąpił błąd.<br>Ta strefa <b>nie</b> zostanie załadowana dopóki błędy nie zostaną poprawione.<p >Oto wynik sprawdzenia";
$l['str_primary_zone_error_not_available_try_again'] = "Twoja strefa nie będzie dostępna po kolejnym przeładowaniu. Wróć później i zmodyfikuj ją jeszcze raz.";
$l['str_primary_generated_config'] = "Oto wygenerowana konfiguracja";
$l['str_primary_internal_tests_ok'] = "Twoja strefa pomyślnie przeszła nasze wewnętrzne testy konfiguracji. Powinna być aktywna w ciągu kwadransa.
Otrzymasz list informujący Cię o jej aktywowaniu.";
$l['str_primary_new_serial_x'] = "Nowy numer seryjny: %s";
$l['str_primary_reset_form_button'] = "Czyść pola";
$l['str_primary_generate_zone_button'] = "Utwórz konfigurację strefy";
$l['str_primary_allow_transfer_ip_allowed'] = "Adresy IP, z których będzie wolno transferować całe strefy (pozostaw puste, żeby zezwolić wszystkim)";
$l['str_primary_allow_transfer_expl'] = "W celu ochrony Twojej strefy możesz wyznaczyć, które komputery mogą transferować całą zawartość Twojej strefy.<br>Zwykle te komputery to dodatkowe serwery DNS dla Twojej strefy, czasem komputery administratorów.<br >Możesz podać kilka adresów IP rozdzielonych średnikami.";
$l['str_primary_allow_transfer_title'] = "Komputery, którym wolno transferować całe strefy";
$l['str_primary_sub_zones_zone'] = "Strefa";
$l['str_primary_sub_zones_expl_on_x_x'] = "Możesz zdefiniować podstrefy, delegowane na inny serwer DNS. <b>Upewnij się, że te strefy są zdefiniowane na serwerach, które wpiszesz.</b><br>
Twoja nowa podstrefa w serwisie %s <b>musi</b> być podstrefą %s, a także nie może zawierać kropki '.' w nazwie.<br>
Serwery DNS muszą być <b>bezwzględne</b> i zakończone <b>kropką</b>.";
$l['str_primary_sub_zones_title'] = "Podstrefy";
$l['str_primary_www_zones_zone'] = "Nazwa";
$l['str_primary_www_zones_expl_on_x_x'] = "Ramka WWW to w skrócie &quot;ukryty&quot; prawdziwy URL (w pasce adresu przeglądarki widać tylko <i>Nazwa</i> (z domeną), zaś zawartość jest z <i>Adres WWW</i>). Przekierowanie WWW to po prostu przekierowanie przeglądarki WWW na prawdziwy URL (w pasce adresu przeglądarki widać <i>Adres WWW</i>).<br>
Reguły nazewnictwa są takie same, jak dla rekordów A, gdyż automatycznie tworzony jest rekord A wskazujący na adres serwera WWW, który obsługuje to przekierowanie.<br>
Różnica: 'przekierowanie stałe' (kod 301) polecane jest przy ostatecznym przekierowaniu (np. na nowy, zmieniony adres), a 'przekierowanie czasowe' (kod 302) przy tymczasowym. Ma to ponoć znaczenie przy wyszukiwarkach internetowych.";
$l['str_primary_www_zones_title'] = "Ramki i przekierowania WWW";
$l['str_primary_www_zones_type'] = "Typ";
$l['str_primary_warning_www_x_exists_not_overwritten'] = "Uwaga: rekord %s już istnieje -- nie został nadpisany";
$l['str_primary_cname_name_a_record'] = "Nazwa";
$l['str_primary_cname_new_cname_x'] = "Nowy CNAME (%s)";
$l['str_primary_cname_alias'] = "Alias";
$l['str_primary_cname_expl'] = "Rekordy CNAME to definicje aliasów nazw.<br>Przykład: jeśli już istnieje rekord A <i>praca</i> wskazujący na adres IP <i>10.1.1.1</i>, to kolejna nazwa (np. <i>work</i>) wskazująca na ten sam adres IP powinna być rekordem CNAME wskazującym na istniejącą już nazwę (czyli na <i>praca</i>).<br > Jest to pożyteczne, gdy masz wiele nazw dla tego samego adresu IP.<br > Jeśli wskazywany rekord jest <b>poza bieżącą strefą</b>, musisz użyć
<b>nazwy bezwzględnej</b> z kropką na końcu.<br>
Jeśli wskazywany rekord jest <b>wewnątrz bieżącej strefy</b>, to <b>nie</b>
dodawaj domeny.<br>
Jeśli chcesz przechwycić wszystkie odwołania do strefy, należy użyć
<b>CNAME wieloznacznego</b>.
Musisz jednak być świadom tego, co robisz, zanim dodasz taki rekord.";
$l['str_primary_cname_title'] = "Rekordy aliasów (CNAME)";
$l['str_primary_ipv6_record_new_aaaa_x'] = "Nowy AAAA (%s)";
$l['str_primary_ipv6_record_modify_reverse_x'] = "Zmodyfikować odpowiednie rekordy PTR, jeśli strefa odwrotna jest zarządzana w serwisie %s?";
$l['str_primary_ipv6_record_expl_zone_and_round_robin'] = "Jeśli chcesz dodać rekord AAAA <b>dla samej strefy</b>, użyj bezwzględnej nazwy <b>z kropką na końcu</b> lub znak '@' (at).<br>
Jeśli chcesz zrobić mapowanie jednej nazwy na <b>kilka podawanych na zmianę</b>
adresów IP (aka Round Robin), to po prostu wpisz różne rekordy AAAA z taką samą nazwą, a innymi adresami IP.";
$l['str_primary_ipv6_record_title'] = "Rekordy adresów IPv6 (AAAA)";
$l['str_primary_ipv6_record_expl_before_x_x_x'] = "Rekordy AAAA przypisują nazwom adresy IPv6. <Nazwa jest względna</b>, tj. tylko to, co chcesz mieć przed %s, jak www dla www.%s <b>oprócz wpisu dla samej domeny</b>, która musi być bezwzględna i zakończona kropką, np. %s.";
$l['str_primary_a_record_new_a_x'] = "Nowy A (%s)";
$l['str_primary_a_record_modify_ptr_x'] = "Zmodyfikować odpowiednie rekordy PTR, jeśli strefa odwrotna jest zarządzana w serwisie %s?";
$l['str_primary_a_record_expl'] = "Jeśli chcesz dodać rekord A <b>dla samej strefy</b>, użyj bezwzględnej nazwy <b>z kropką na końcu</b> lub znak '@' (at).<br>
Jeśli chcesz zrobić mapowanie jednej nazwy na <b>kilka podawanych na zmianę</b>
adresów IP (aka Round Robin), to po prostu wpisz różne rekordy A z taką samą nazwą, a innymi adresami IP.<br>
Jeśli chcesz ustawić rekord wieloznaczny (wildcard, '*'), to utwórz jakiś rekord A (np. www) i ustaw na niego CNAME wieloznaczny.";
$l['str_primary_a_record_title'] = "Rekordy adresów (A)";
$l['str_primary_a_record_what_you_want_before_x_x_x'] = "Rekordy A przypisują nazwom adresy IP. <b>Nazwa jest względna</b>, tj. tylko to, co chcesz mieć przed %s, jak www dla www.%s <b>oprócz wpisu dla samej domeny</b>, która musi być bezwzględna i zakończona kropką, np. %s.";
$l['str_primary_reverse_sub_zone_delegated_to_user_x'] = "delegowany użytkownikowi %s";
$l['str_primary_reverse_sub_zone_delegated_to_user'] = "delegowany użytkownikowi";
$l['str_primary_reverse_sub_zone_range_to'] = "do";
$l['str_primary_reverse_sub_zones_delegation_how'] = "To jest do zrobienia przy użyciu CNAME, jak nakazuje RFC 2317.";
$l['str_primary_reverse_sub_zone_range'] = "Zakres";
$l['str_primary_reverse_sub_zone_range_from'] = "od";
$l['str_primary_reverse_sub_zones_delegation_expl_x_x'] = "Przydaje się to bardzo, gdy masz strefę odwrotną podzieloną między różnych administratorów.<br>
Dla przykładu, jeśli chcesz mieć adresy IP od 1 do 10 w strefie %s delegowane dla użytkownika \"PrzyjemnyTypek\" w serwisie %s, będzie on mógł zarządzać tymi rekordami PTR w tej strefie.";
$l['str_primary_name'] = "Nazwa";
$l['str_primary_ptr_new_ptr_x'] = "Nowy PTR";
$l['str_primary_ptr_ip_under_x'] = "IP w %s";
$l['str_primary_reverse_sub_zones_title'] = "Częściowe podstrefy";
$l['str_primary_reverse_sub_zones_delegation_x'] = "Możesz zdefiniować kawałki swojej strefy wydelegowane do innych użytkowników serwisu %s.";
$l['str_primary_ptr_ipv6_note'] = "Uwaga: adresy IPv6 też są przyjmowane.";
$l['str_primary_ptr_sample_content'] = "PTR: 4&nbsp;&nbsp;&nbsp;&nbsp;Nazwa: www.example.com.";
$l['str_primary_ptr_sample'] = "Przykład dla IP 1.2.3.4, w strefie 3.2.1.in-addr.arpa";
$l['str_primary_mx_pref'] = "Preferencja";
$l['str_primary_ptr_title'] = "Rekordy nazw (PTR)";
$l['str_primary_ptr_expl'] = "Rekordy PTR są przypisaniem adresu IP do nazwy.
<b>Nazwa jest bezwzględna</b>; musisz użyć pełnej nazwy, z domeną oraz <b>końcową kropką</b>.
Adresy IP są opisywane w <b>odwrotnej kolejności</b>. Wpisuje się tylko
ostatnią część adresu IP w bieżącej strefie.";
$l['str_primary_mx_expl_for_pref'] = "Musisz także określić liczbę preferencyjną. Jeśli masz kilka MX-ów, domyślny będzie ten z najniższą liczbą preferencyjną.";
$l['str_primary_new_mx_x'] = "Nowy MX (%s)";
$l['str_primary_mx_expl_with_sample_x'] = "Rekordy MX to <b>nazwy</b> (nie adresy IP). Musisz użyć <b>nazwy bezwzględnej</b> komputera, razem z <b>końcową kropką</b> (np: mail.%s.).";
$l['str_primary_mail_exchanger_title'] = "Rekordy serwerów obsługujących pocztę (MX)";
$l['str_primary_mandatory_ns'] = "Obowiązkowy NS";
$l['str_primary_new_ns_x'] = "Nowy NS (%s)";
$l['str_primary_negative_caching'] = "Negatywne buforowanie TTL";
$l['str_primary_name_server_title'] = "Rekordy (NS) serwerów DNS";
$l['str_primary_name_server_expl_with_sample_x'] = "Rekordy NS to <b>nazwy</b> (nie adresy IP). Musisz użyć <b>nazwy bezwzględnej</b> komputera, razem z <b>końcową kropką</b> (np: %s.)";
$l['str_primary_negative_caching_expl'] = "Negatywne buforowanie TTL pozwala na kontrolowanie czasu buforowania przez inne serwery odpowiedzi typu nie-ma-takiej-domeny (NXDOMAIN) z tego serwera.
Maksymalny czas negatywnego buforowania to 3 godziny (10800 sekund).";
$l['str_primary_expire_time'] = "Czas wygaśnięcia (expire)";
$l['str_primary_refresh_period'] = "Częstość odświeżania (refresh)";
$l['str_primary_retry_interval_expl'] = "Jeśli serwerowi dodatkowemu nie uda się skontaktować z serwerem podstawowym po czasie odświeżania, to próbuje co jakiś czas.";
$l['str_primary_retry_interval'] = "Częstość powtórek (retry)";
$l['str_primary_expire_time_expl'] = "Jeśli serwerowi dodatkowemu nie uda się skontaktować z serwerem podstawowym przez czas wygaśnięcia, to zaczyna usuwać stare dane. Czas wygaśnięcia zawsze powinien być znacznie większy od częstości odświeżania i powtórek.";
$l['str_primary_default'] = "domyślny";
$l['str_primary_default_ttl'] = "Domyślny TTL";
$l['str_html_delete_zone'] = "Skasuj strefę";
$l['str_html_go_on_xname'] = "Strona główna";
$l['str_primary_global_params'] = "Parametry globalne";
$l['str_primary_ttl_explanation'] = "Czas życia (Time To Live) jest używany przez klientów do decydowania o tym, jak długo przetrzymywać informację o rekordzie w swoich buforach (cache).";
$l['str_warning'] = "Ostrzeżenie";
$l['str_html_create_zone'] = "Utwórz strefę";
$l['str_purge_keeping_last_year'] = "Usuń wszystko z wyjątkiem ostatniego roku";
$l['str_email_validation_title'] = "Weryfikacja adresu email";
$l['str_email_flagged_valid'] = "Twój adres email został oznaczony jako poprawny.";
$l['str_error'] = "Błąd";
$l['str_purge_keeping_last_month'] = "Usuń wszystko z wyjątkiem ostatniego miesiąca";
$l['str_purge_keeping_last_day'] = "Usuń wszystko z wyjątkiem ostatnich 24 godzin";
$l['str_purge_all'] = "Usuń wszystko";
$l['str_no_logs_available'] = "Brak logów";
$l['str_purge'] = "Usuń";
$l['str_delete_selected'] = "Skasuj oznaczone";
$l['str_only_admin_can_access_logs'] = "Tylko administrator ma dostęp do logów";
$l['str_per_zone'] = "wg stref";
$l['str_per_user'] = "wg użytkownika";
$l['str_sort_results'] = "Wynik sortowania";
$l['str_per_date'] = "wg dat";
$l['str_no_logs_for_deletion'] = "Nie zaznaczono żadnych logów do skasowania";
$l['str_x_logs_purged'] = "%s logów usunięto";
$l['str_while_purging_logs_x'] = "W trakcie usuwania logów %s";
$l['str_user_logs_title'] = "Logi użytkowników";
$l['str_while_deleting_logs_x'] = "W trakcie kasowania logów %s";
$l['str_logs_successfully_deleted'] = " szt. logów zostało skasowanych";
$l['str_if_x_is_not_the_right_one'] = "Jeśli <b>%s</b> nie jest poprawny... i list poszedł do innej osoby... popraw adres jak najszybciej, zanim ktoś inny potwierdzi i przejmie konto.";
$l['str_email_changed_warning'] = "Na nowy adres został wysłany list w celu weryfikacji jego poprawności.
Dopóki nie dokończysz procedury weryfikacji, nowy adres nie będzie aktywny.";
$l['str_parameters_successfully_updated'] = "Twoje ustawienia zostały zaktualizowane.";
$l['str_some_errors_occured'] = "Wystąpiły jakieś błędy, nie wszystkie zmiany zostały wprowadzone.";
$l['str_bad_current_password'] = "nieprawidłowe aktualne hasło";
$l['str_new_passwords_dont_match'] = "nowe hasła nie pasują";
$l['str_changing_password'] = "Zmiana hasła";
$l['str_email_validation_error_occured_plz_vrfy_that_x_is_working_x'] = "W trakcie wysyłania listu wystąpił błąd. Sprawdź, czy Twój adres %s jest poprawny. W razie wątpliwości możesz się ze mną skontaktować pod adresem %s.";
$l['str_email_validation_mail_sent'] = "Wysłano Ci list w celu potwierdzenia adresu email.";
$l['str_email_validation'] = "potwierdzenie adresu email";
$l['str_changing_email'] = "Zmiana Twojego adresu email";
$l['str_ok'] = "OK";
$l['str_login_already_exists'] = "taki login już istnieje";
$l['str_changing_login_name'] = "Zmiana Twojego loginu";
$l['str_language'] = "Język";
$l['str_modify_button'] = "Modyfikuj";
$l['str_ipv6_interface_details'] = "rekordy IPv6 w strefach podstawowych";
$l['str_number_of_rows_per_record'] = "Liczba wierszy do wprowadzania dla każdego rekordu";
$l['str_ipv6_interface'] = "Interfejs IPv6";
$l['str_advanced_interface_details'] = "parametry SOA i TTL";
$l['str_advanced_interface'] = "Interfejs zaawansowany";
$l['str_type_your_password_to_change_it'] = "wpisz swoje aktualne hasło tylko wtedy, gdy chcesz je zmienić";
$l['str_current_password'] = "Aktualne hasło";
$l['str_your_valid_email'] = "Twój <span class=\"warning\">działający</span> adres email";
$l['str_changing_email_warning'] = "zmiana adresu email uniemożliwi Ci zalogowanie się do momentu weryfikacji nowego adresu email. Upewnij się, że podajesz <b>działający</b> adres email, gdyż w przeciwnym przypadku stracisz dostęp do tego konta!";
$l['str_must_log_before_editing_pref'] = "Musisz się zalogować, zanim będziesz edytować preferencje.";
$l['str_you_can_change_your_login'] = "Możesz zmienić swój login";
$l['str_user_preferences'] = "Ustawienia użytkownika";
$l['str_you_did_not_enter_login_nor_zonename'] = "musisz podać login lub nazwę strefy";
$l['str_bad_password_id'] = "Zły ID, może ten URL został już wykorzystany?";
$l['str_your_password_is'] = "Twoje hasło to";
$l['str_you_can_now_use_the_x_main_interface_x_to_log_in'] = "Możesz teraz zalogować się ze %sstrony głównej%s.";
$l['str_errors_occured_during_recovery_mail_sending'] = "W trakcie wysyłania listu nastąpił błąd. Spróbuj później jeszcze raz.";
$l['str_password_recovery_login_is'] = "Twój login to";
$l['str_recovery_mail_sent'] = "Wysłano do Ciebie list z URL-em wskazującym na stronę, która pokaże Ci Twoje nowe, tymczasowe hasło.<p >
<b>UWAGA: jak najszybciej skorzystaj z tego URL-a, gdyż jest wysyłany w postaci niezaszyfrowanej, którą każdy może podpatrzeć.</b><br>
Ze względu na bezpieczeństwo URL ten działa przez jeden dzień i może zostać wykorzystany tylko raz.";
$l['str_email_not_sent'] = "wygląda na to, że Twoje konto nie ma poprawnego adresu email. Nie możemy Ci pomóc.";
$l['str_you_did_not_specify_zonetype'] = "musisz wybrać typ strefy";
$l['str_recover_password_button'] = "Odzyskaj hasło";
$l['str_or_one_of_your_zones'] = "<b>lub</b> jedna z Twoich stref";
$l['str_password_recovery'] = "odzyskiwanie hasla";
$l['str_lost_pwd_fill_in_fields_to_recover_password'] = "Nie pamiętasz hasła?<br>
Wypełnij poniższe pola, wyślemy Ci URL-a, który pomoże Ci odzyskać hasło.";
$l['str_must_log_before_modifying_zone'] = "Musisz się zalogować, zanim zaczniesz modyfikować strefę.";
$l['str_password_recovery_title'] = "Odzyskiwanie hasła";
$l['str_choose_a_zone_to_modify'] = "Wybierz strefę do modyfikacji";
$l['str_modify_zone_title'] = "Modyfikuj strefę";
$l['str_validation_of_this_form_will_be_inactive'] = "Weryfikacja tej strony będzie wyłączona.";
$l['str_errors_occured_during_modification_of_x_x'] = "W trakcie modyfikacji %s (%s) wystąpiły błędy: %s.";
$l['str_log_modification_of_x_x'] = "Zmiana %s (%s). ";
$l['str_log_modification_of_x_x_new_serial_x'] = "Zmiana %s (%s). Nowy numer seryjny: %s";
$l['str_title_zone_type_x_x'] = "%s %s";
$l['str_current_zone'] = "Bieżąca strefa";
$l['str_delete_all_logs'] = "Skasuj wszystkie logi";
$l['str_logs'] = "Logi";
$l['str_log_viewer_title'] = "Logi";
$l['str_last_logs_for_x'] = "Ostatnie logi dla %s";
$l['str_zone_content'] = "zawartość strefy";
$l['str_not_available'] = "brak danych";
$l['str_status'] = "Status";
$l['str_view'] = "Obejrzyj";
$l['str_serial'] = "#seryjny";
$l['str_name_server'] = "Serwer DNS";
$l['str_index_title'] = "Darmowa usługa udostępniania serwerów DNS";
$l['str_must_log_first'] = "musisz się najpierw zalogować.";
$l['str_groups_disabled_in_server_conf'] = "Grupy są wyłączone w konfiguracji serwisu.";
$l['str_new_user_has_been_successfully_created'] = "Nowy użytkownik został utworzony.";
$l['str_you_are_not_admin_of_your_group'] = "Nie jesteś administratorem swojej grupy.";
$l['str_errors_occured_during_user_deletion_x'] = "Wystąpił błąd w trakcie kasowania użytkownika %s";
$l['str_rights_for_x_successfully_set_to_x'] = "Uprawnienia dla %s zostały zmienione na %s.";
$l['str_user_x_is_not_member_of_this_group'] = "użytkownik %s nie jest członkiem tej grupy.";
$l['str_while_changing_group_rights_for_x'] = "w trakcie zmiany uprawnień grupy dla %s";
$l['str_wrong_group_rights'] = "Nieprawidłowe prawa grupy.";
$l['str_new_password'] = "Nowe hasło";
$l['str_create_new_user_button'] = "Utwórz nowego użytkownika";
$l['str_write_explanation'] = "Zapis: użytkownik będzie mógł także edytować zawartość strefy oraz tworzyć nowe strefy.";
$l['str_read_explanation'] = "Odczyt: użytkownik będzie w stanie odczytać zawartość strefy, logi i status.";
$l['str_warning_user_will_manage_only_group_zones'] = "Uwaga! Użytkownik będzie uprawniony do zarządzania strefami z Twojej grupy.";
$l['str_add_user'] = "Dodaj użytkownika.";
$l['str_rights'] = "prawa";
$l['str_delete'] = "Skasuj";
$l['str_read_access'] = "Odczyt";
$l['str_write_access'] = "Zapis";
$l['str_modify_user_list'] = "Modyfikuj listę użytkowników";
$l['str_wrong_access'] = "Złe uprawnienia";
$l['str_no_users_in_your_group'] = "Brak (nie licząc Ciebie) użytkowników w Twojej grupie";
$l['str_manage_your_users'] = "Zarządzaj użytkownikami";
$l['str_users_in_your_group'] = "Użytkownicy w Twojej grupie";
$l['str_warranty_and_disclaimer'] = "Gwarancja oraz warunki używania usługi";
$l['str_zone_content_for_x_on_server_x'] = "Zawartość strefy %s na serwerze %s";
$l['str_dig_zone_title'] = "Sprawdzanie strefy przy pomocy programu dig";
$l['str_you_dont_own_this_zone'] = "Nie posiadasz tej strefy.";
$l['str_log_deletion_of_x_x'] = "Skasowanie %s (%s).";
$l['str_trouble_during_deletion_of_x_x'] = "Problem w trakcie kasowania %s (%s):";
$l['str_deleting_x_x_x'] = "Kasowanie %s (%s) z serwisu %s";
$l['str_yes_please_delete_x_x_from_x'] = "Tak, skasuj %s (%s) z serwisu %s";
$l['str_do_you_confirm_zone_deletion_x_x_from_x'] = "Czy potwierdzasz, że chcesz skasować strefę %s (%s) z serwisu %s?";
$l['str_you_can_not_manage_delete_zone_x_x'] = "Nie możesz zarządzać ani kasować strefy %s (%s)";
$l['str_you_can_not_view_logs_zone_x_x'] = "Nie możesz oglądać logów strefy %s (%s)";
$l['str_choose_a_zone_to_delete'] = "Wybierz strefę do skasowania";
$l['str_must_log_before_deleting_zone'] = "Musisz się zalogować, zanim skasujesz strefę.";
$l['str_delete_zone_title'] = "Kasowanie strefy";
$l['str_you_have_been_successfully_deleted_x_go_back_x'] = "Twoje konto zostało skasowane. %sWróć na stronę główną%s";
$l['str_while_deleting_your_user'] = "w trakcie kasowania Twojego konta.";
$l['str_errors_occured_during_deletion_plz_refer_to_upper_msg'] = "W trakcie kasowania wystąpił błąd. Wyjaśnienia powinny być w liniach wyżej.";
$l['str_while_deleting_user_x'] = "w trakcie kasowania użytkownika %s.";
$l['str_user_successfully_deleted'] = "Użytkownik został skasowany.";
$l['str_user_x_successfully_deleted'] = "Użytkownik %s został skasowany.";
$l['str_zone_successfully_deleted'] = "Strefa została skasowana.";
$l['str_if_problem_persists_x_contact_us_x'] = "Jeśli problem się ponowi, %sskontaktuj się ze mną %s";
$l['str_errors_occured_during_deletion_plz_try_again'] = "W trakcie kasowania wystąpił błąd. Spróbuj później.";
$l['str_deleting_x_x_from_x'] = "Kasowanie %s (%s) z usługi %s";
$l['str_no_dont_delete'] = "Nie, nie kasuj";
$l['str_yes_please_delete_myself_from_x'] = "Tak, skasujcie MOJE konto z usługi %s";
$l['str_confirmation'] = "Potwierdzenie";
$l['str_do_you_confirm_your_deletion_from_x'] = "Czy potwierdzasz, że chcesz skasować swoje konto z usługi %s?";
$l['str_not_administrator_deletion'] = "Jako że nie jesteś administratorem grupy, tylko Twoje konto zostanie skasowane z naszych serwerów.";
$l['str_users_to_be_deleted'] = "Użytkownicy do skasowania";
$l['str_following_users_will_be_deleted_from_x'] = "Następujący użytkownicy, którymi zarządzasz, zostaną skasowani z usługi %s";
$l['str_delete_user_title'] = "Kasowanie użytkownika";
$l['str_must_log_before_deleting_yourself'] = "Musisz się zalogować, zanim skasujesz swoje konto";
$l['str_administrator_delete_content'] = "Jako że jesteś administratorem grupy, cała Twoja grupa zostanie skasowana
z naszych serwerów, zarówno strefy, jak i członkowie grupy.";
$l['str_zones_to_be_deleted'] = "Strefy do skasowania";
$l['str_following_zones_will_be_deleted'] = "Następujące strefy zostaną skasowane z naszych serwerów -- upewnij się, że usuniesz wpisy o naszych serwerach w serwerach odpowiedzialnych za rejestrację stref nadrzędnych:";
$l['str_as_member_of_group_action_logged'] = "Twoje działania jako członka grupy będą zalogowane.";
$l['str_primary_ptr_record_modify_a_x'] = "Zmodyfikować odpowiedni rekord A, jeśli strefa zarządzana przez %s?";
$l['str_primary_bad_cname_x'] = "Zły CNAME %s";
$l['str_none'] = "(pusta)";
$l['str_creation_of_x_x'] = "Utworzenie %s (%s).";
$l['str_you_can_now_use_the_x_modif_interface_x_to_verify'] = "W celu sprawdzenia zawartości możesz teraz użyć %szakładki modyfikacji%s.";
$l['str_you_can_now_use_the_x_modif_interface_x_to_configure'] = "W celu konfiguracji możesz teraz użyć %szakładki modyfikacji%s.";
$l['str_zone_x_successfully_registered_on_x_server'] = "Strefa %s została pomyślnie zarejestrowana na serwerze DNS %s.";
$l['str_errors_occured_during_tmpl_usage_check_content'] = "Przy próbie użycia wzorca wystąpił błąd. Szczegóły sprawdź w zawartości strefy.";
$l['str_using_zone_x_as_template'] = "Strefa %s użyta jako wzorzec";
$l['str_template_type_missmatch_noone_will_be_used'] = "strefa wybrana jako wzorzec ma inny typ niż nowa strefa. Wzorzec nie zostanie użyty.";
$l['str_logging_action_x'] = "akcja zalogowana: %s";
$l['str_zones_linked_exist_and_not_manageable'] = "strefy połaczone z tą już istnieją i to nie Ty nimi zarządzasz: ";
$l['str_zone_linked_exists_and_not_manageable'] = "strefa połączona z tą już istnieje i to nie Ty nią zarządzasz: ";
$l['str_bad_zone_name_x'] = "zła nazwa strefy %s";
$l['str_create'] = "Utwórz";
$l['str_secondary'] = "Zapasowe";
$l['str_using_following_zone_as_template'] = "(opcjonalnie) Użyj tej strefy jako wzorca";
$l['str_primary'] = "Podstawowe";
$l['str_zonetype'] = "Typ strefy";
$l['str_zone'] = "Nazwa strefy";
$l['str_must_log_before_creating_new_zone'] = "Musisz się zalogować, zanim utworzysz nową strefę.";
$l['str_not_allowed_by_group_admin_to_create_write_zones'] = "Administrator grupy nie zezwolił Ci na tworzenie/zmianę/kasowanie stref.";
$l['str_trouble_with_db'] = " Problem z bazą danych";
$l['str_create_new_zone'] = "Tworzenie nowej strefy";
$l['str_not_public_server'] = "To nie jest serwer ogólnodostępny";
$l['str_uppercase_error'] = "BŁĄD";
$l['str_passwords_dont_match'] = "Wpisano dwa różne hasła!";
$l['str_bad_email_syntax'] = "Zła składnia adresu email. Uważaj, kropka przed '@' nie jest dozwolona w konfiguracji DNS. To nie jest błąd serwisu, użyj adresu bez kropki przed '@'.";
$l['str_bad_email_syntax_gmail'] = "Podpowiem, że gmail ignoruje kropki przed '@', co oznacza, że na to samo konto wpadnie imie.nazwisko@gmail.com, i.m.i.e.n.a.z.w.i.s.k.o@gmail.com oraz imienazwisko@gmail.com";
$l['str_bad_login_name'] = "Zły login lub hasło.";
$l['str_error_missing_fields'] = "Błąd, brakujące pola: %s";
$l['str_confirm_password'] = "Potwierdź hasło";
$l['str_email'] = "Email";
$l['str_i_have_read_disclaimer'] = "Zgoda na warunki używania serwisu";
$l['str_primary_soa_params'] = "Parametry SOA";
$l['str_primary_refresh_interval_expl'] = "Częstość odświeżania decyduje o tym, jak często serwery dodatkowe będą sprawdzać, czy ich dane na temat strefy są aktualne.";
$l['str_html_modify_zone'] = "Modyfikuj strefę";
$l['str_login'] = "Login";
$l['str_password'] = "Hasło";
$l['str_create_new_user_title'] = "Utwórz nowego użytkownika";
$l['str_secondary_after_modif_comment_in_sample_1'] = "zmodyfikuj ten przykładowy plik konfiguracyjny,";
$l['str_secondary_after_modif_comment_in_sample_2'] = "aby pasował do Twoich potrzeb";
$l['str_secondary_after_modif_delegate_x_to'] = "wydelegować strefę %s do Twojego podstawowego serwera DNS oraz do naszych serwerów DNS";
$l['str_secondary_reload_info'] = "Jako że konfiguracja jest regularnie przeładowywana na naszych serwerach DNS, wprowadzone zmiany będą aktywne po następnym przeładowaniu za jakiś kwadrans. Dostaniesz maila z informacją na ten temat.";
$l['str_session_expired'] = "Sesja utraciła ważność.";
$l['str_login_not_activated'] = "login już istnieje, acz adres email nie został zweryfikowany przez użytkownika.";
$l['str_no_such_id'] = "Brak takiego ID.";
$l['str_no_valid_mx_record'] = "najprawdopodobniej zła nazwa domeny w adresie email (brak dla niej wpisów MX lub A).";
$l['str_bad_zone_name'] = "zła nazwa strefy";
$l['str_zone_successfully_created'] = "Strefa została utworzona.";
$l['str_while_configuring_from_template'] = "w trakcie kopiowania konfiguracji z wzorca";
$l['str_zone_already_exists'] = "Strefa już istnieje!";
$l['str_zone_exists_in_deletion_status'] = "Strefa istnieje, ale jest w trakcie kasowania. Spróbuj później (max kwadrans).";
$l['str_no_logs_available_for_this_zone'] = "Brak logów dla tej strefy.";
$l['str_zone_logs_purged'] = "logi strefy usunięte";
$l['str_i_have_read_and_i_understand_discl_available_at_x'] = "Oświadczam, że warunki korzystania z usługi dostępne pod adresem %s są mi znane i je akceptuję";
$l['str_create_my_user_button'] = "Załóż konto";
$l['str_email_this_is_an_automatic_email'] = "Ten list został wysłany automatycznie.";
$l['str_email_you_have_created_an_account_on_x'] = "Zostało utworzone nowe konto w serwisie %s.";
$l['str_email_this_email_is_sent_to_validate_email_x'] = "Ten list został wysłany w celu weryfikacji Twojego adresu email, %s.";
$l['str_email_please_follow_this_link'] = "Proszę wejść na poniższy odnośnik ";
$l['str_email_account_can_not_be_used_without_this_validation'] = "Twoje konto jest zablokowane do momentu weryfikacji Twojego adresu email.";
$l['str_email_regards'] = "pozdrawiamy,";
$l['str_email_error_error_occured'] = "Wystąpił błąd w trakcie wysyłania Ci listu.";
$l['str_email_error_please_verify_address_x'] = "Upewnij się, że Twój adres email %s działa poprawnie.";
$l['str_in_doubt_you_can_contact_us_at_x'] = "W przypadku wątpliwości, możesz się ze mną skontaktować pod adresem %s";
$l['str_email_successfully_sent_explanation1'] = "Wysłano Ci list w celu weryfikacji poprawności adresu email. Wejdź na stronę wskazywaną przez URL zawarty w tym liście.";
$l['str_email_successfully_sent_explanation2'] = "Dopiero potem możesz się zalogować na swoje konto.";
$l['str_currently_hosted'] = "Zarejestrowane";
$l['str_loginbox'] = "Konto";
$l['str_login_or_x_create_new_user_x'] = "Zaloguj się lub %sutwórz nowego użytkownika%s";
$l['str_log_me_in'] = "Zaloguj się";
$l['str_forgot_password'] = "Zapomniane hasło?";
$l['str_change_your_preferences'] = "Zmień swoje ustawienia";
$l['str_administrate_your_group'] = "Zarządzaj grupą.";
$l['str_view_group_logs'] = "Oglądaj logi grupy";
$l['str_you_have_read_only_access'] = "Masz dostęp tylko do odczytu ";
$l['str_you_have_read_write_access'] = "Masz dostęp do odczytu i zapisu ";
$l['str_delete_your_account'] = "Skasuj konto";
$l['str_logout'] = "Wyloguj";
$l['str_log_legend'] = "Legenda";
$l['str_log_information'] = "Informacje";
$l['str_log_warning'] = "Ostrzeżenia";
$l['str_log_unknown'] = "Nieznane";
$l['str_all_your_zones'] = "Wszystkie Twoje strefy";
$l['str_email_password_recovery_for_account_on_x'] = "W serwisie %s ktoś (mam nadzieję, że Ty) zażyczył uzyskania tymczasowego hasła.";
$l['str_email_go_on_followin_page_to_recover'] = "Udaj się na tę tymczasową stronę, uzyskasz tam hasło.
Uwaga: stronę będziesz mógł odwiedzić tylko raz.";
$l['str_email_address_modified_on_x'] = "Zmieniłeś swój adres email w serwisie %s.";
$l['str_contact_title'] = "Kontakt";
$l['str_contact_for_bugs_contact_us'] = "W sprawach związanych z problemami dotyczącymi serwisu %s możesz skontaktować się ze mną pod adresem <a href=\"mailto:%s\" class=\"linkcolor\">%s</a>.";
$l['str_contribute_title'] = "Oprogramowanie";
$l['str_contribute_content'] = "System %s to <a target=_blank href=\"http://www.xname.org/\">XName Software</a>, który na język polski przetłumaczył, a także skonfigurował i udostępnił światu, Piotr Kucharski. Jeśli podoba Ci się to oprogramowanie, możesz <a target=_blank href=\"http://www.xname.org/contribute.php\" class=\"linkcolor\">pomóc</a> w jego tworzeniu i/lub przysyłać swoje poprawki i propozycje rozwoju (<a href=\"mailto:bugs@xname.org\">bugs@xname.org</a>). XName Software jest udostępnione na <a target=_blank href=\"http://www.gnu.org/copyleft/gpl.html\" class=\"linkcolor\">licencji GPL</a>.
<p id=\"logo\"><a href=\"http://source.xname.org\"><img src=\"images/xnamepowered.png\" alt=\"XName\"></a></p>
";
$l['str_languages_title'] = "Dostępne języki";
$l['str_reload_mail_subject_x_x'] = "%s Przeładowano Twoje strefy na %s";
$l['str_reload_mail_content_x_x_x'] = "To jest automatyczny list z serwera DNS %s usługi %s.
Następujące strefy zostały na nim przeładowane:

%s

Twoje zmiany na tym serwerze DNS powinny być widoczne w ciągu kilku minut.";
$l['str_log_generate_prefix'] = "generate";
$l['str_log_error'] = "Błąd";
$l['str_log_error_opening_x'] = "Błąd przy otwieraniu %s";
$l['str_log_error_can_not_backup'] = "Błąd: nie mogę wykonać kopii named.conf";
$l['str_log_error_sending_email_x'] = "BŁĄD: wystąpił błąd w trakcie wysyłania listu %s";
$l['str_log_error_zone_x_not_valid'] = "BŁĄD: strefa %s nie jest prawidłowa";
$l['str_error_checking_subject_x'] = "%s named.conf błąd w trakcie sprawdzania";
$l['str_error_while_checking_conf_on_x_tmp_x'] = "Bład w trakcie sprawdzania named.conf na %s
Poprzedni plik named.conf został odtworzony.
W katalogu %s są dostępne błędne pliki
named.conf.error i named.zones.error

-----
Wynik sprawdzania:";
$l['str_log_delete_prefix'] = "delete";
$l['str_log_deleting_user_x'] = "Kasowanie użytkownika %s";
$l['str_log_deleting_zone_x'] = "Kasowanie strefy %s";
$l['str_log_getremotelogs_prefix'] = "getremotelogs";
$l['str_log_error_executing_x'] = "Błąd wykonania %s";
$l['str_log_insertlogs_prefix'] = "insertlogs";
$l['str_log_not_matching'] = "Nie pasuje";
$l['str_log_install_prefix'] = "install";
$l['str_install_new_server'] = "Dodawanie nowego serwera.

Odpowiedz na następujące pytania
(UWAGA: nie jest sprawdzana poprawność odpowiedzi... odpowiadaj uważnie)";
$l['str_install_servername'] = "Nazwa serwera";
$l['str_install_server_ip'] = "Adres IP";
$l['str_install_server_location'] = "Lokalizacja serwera (France/Paris, Polska/Warszawa, itd...)";
$l['str_install_thanx'] = "Dziękuję za odpowiedzi.";
$l['str_log_migrate_prefix'] = "migrate";
$l['str_migrate_transferip_field'] = "Pole transferip zostało dodane w tabeli dns_server.
Jeśli dla któregokolwiek serwera IP używane do transferu strefy jest inne od podstawowego, musisz ręcznie poprawić bazę danych.";
$l['str_migrate_ptr_delegate'] = "Typy rekordów PTR i DELEGATE zostały dodane do tabeli dns_record.";
$l['str_migrate_ipv6'] = "Opcja IPv6 została dodana do tabeli dns_user.";
$l['str_migrate_nbrows'] = "Opcja liczby wierszy została dodana do tabeli dns_user.";
$l['str_migrate_lang'] = "Opcja języka została dodana do tabeli dns_user.";
$l['str_log_pushtoservers_prefix'] = "pushtoservers";
$l['str_log_error_deleting_x'] = "Błąd w trakcie kasowania %s";
$l['str_log_sqloptimize_prefix'] = "sqloptimize";
$l['str_migrate_ttl'] = "TTL w bazie danych został zmieniony tak, żeby używać '-1' zamiast 'default'.";
$l['str_migrate_mandatory_field'] = "Pole mandatory zostało dodane w tabeli dns_server.
Jeśli któryś z używanych serwerów nie jest obowiązkowy, musisz ręcznie poprawić bazę danych.";
$l['str_view_zones_title'] = "Lista Twoich stref";
$l['str_html_view_zones'] = "Lista stref";
$l['str_must_log_before_viewing_zones'] = "Musisz się zalogować, zanim obejrzysz swoje strefy.";
$l['str_migrate_dns_admin'] = "Utworzono tabelę dns_admin. Ręcznie dodaj swój userID.";
$l['str_srv_records_details'] = "rekordy SRV w strefach podstawowych";
$l['str_srv_records'] = "Rekordy SRV";
$l['str_primary_srv_port'] = "Port";
$l['str_primary_srv_weight'] = "Waga";
$l['str_primary_srv_priority'] = "Ważność";
$l['str_primary_srv_record_expl'] = "Nazwy rekordów SRV powstają ze sklejenia nazwy usługi, 
  protokołu (tcp lub udp) i nazwy domeny (w bieżącej strefie). Np. \"_sip._tcp\" dla 
  rekordu SRV dla VoIP. Użyj parametru \"Port\" dla wyszczególnienia, na który port 
  na serwerze docelowym należy się łączyć z tą usługą.";
$l['str_primary_srv_record_title'] = "Rekordy serwisów (SRV)";
$l['str_primary_deleting_www_x'] = "Kasuję rekord WWW %s";
$l['str_primary_deleting_srv_x'] = "Kasuję rekord SRV %s";
$l['str_primary_warning_srv_x_exists_not_overwritten'] = "Uwaga: rekord SRV dla %s już 
  istnieje &mdash; nie został nadpisany.";
$l['str_primary_bad_srvname_x'] = "Nieprawidłowa nazwa rekordu SRV %s";
$l['str_primary_weight_for_srv_x_has_to_be_int'] = "Waga dla rekordu SRV musi być liczbą całkowitą.";
$l['str_primary_adding_srv_x'] = "Dodaję rekord SRV %s.";
$l['str_primary_priority_for_srv_x_has_to_be_int'] = "Ważność dla rekordu SRV %s musi być liczbą całkowitą";
$l['str_primary_bad_srv_x'] = "Nieprawidłowa zawartość rekordu SRV %s";
$l['str_blacklisted_zone_x_x'] = "Nie możesz założyć strefy %s (kod %s)";
$l['str_total_hosted_zones'] = "Razem";
$l['str_primary_adding_txt_x'] = "Dodaję rekord TXT %s.";
$l['str_primary_bad_txt_x'] = "zła nazwa TXT %s.";
$l['str_primary_deleting_txt_x'] = "Kasuję rekord TXT %s";
$l['str_primary_txt_record_expl_x_x_x'] = "Rekordy TXT służą jako połączenie prostego tekstu 
  i nazwy. Mogą zostać użyte do komentowania konfiguracji strefy lub do szczególnych 
  zastosowań (jak niektóre systemy antyspamowe). Nazwą może być istniejący rekord (A, NS, itd...), 
  sama strefa lub coś nowego.<br>
  <strong>Nazwa jest względna</strong>, tj. tylko to, co chcesz mieć przed %s, jak www dla 
  www.%s <strong>oprócz nazwy samej domeny</strong>, która jest bezwzględna, tj. %s.<br>
  Jeśli chcesz dodać rekord TXT <strong>dla samej strefy</strong>, użyj bezwzględnej nazwy 
  domeny <strong>z kropką na końcu</strong>.";
$l['str_primary_txt_record_title'] = "Rekordy (TXT) tekstowe";
$l['str_txt_records_details'] = "rekordy TXT w strefach podstawowych";
$l['str_txt_records'] = "Rekordy TXT";
$l['str_secondary_count'] = "Zapasowe";
$l['str_primary_count'] = "Podstawowe";
$l['str_primary_sub_zones_new_subzone_x'] = "Nowa podstrefa (%s)";
$l['str_failed_serverimport'] = "Import z serwera nie powiódł się.";
$l['str_bad_serverimport_name'] = "Zła nazwa serwera importu. Użyj nazwy serwera lub jego adresu IP.";
$l['str_no_serverimport'] = "Import z serwera nie jest możliwy dla stref zapasowych.";
$l['str_authoritative_server'] = "IP serwera autorytatywnego";
$l['str_authoritative_server_x'] = "Serwer autorytatywny (inaczej: master, podstawowy) jest 
  wymagany do prawidłowego działania&nbsp;&mdash;&nbsp;to od niego serwer zapasowy ściąga zawartość strefy. 
  Musi być zezwolony transfer strefy przynajmniej dla %s";
$l['str_import_server'] = "(opcjonalnie) Importuj z serwera";
$l['str_import_server_x'] = "Jeżeli zostanie podana nazwa serwera,
  system spróbuje z niego ściągnąć wszystkie rekordy danej strefy. 
  Musi być zezwolony transfer strefy dla %s";
$l['str_use_textarea_for_import'] = "Importuj rekordy z poniższego formularza. Tylko dla stref podstawowych.";
$l['str_primary_x_name_ends_with_dot'] = "Nazwa PTR (%s) jest zakończona kropką. To jest 
  dozwolone, ale wynik może być dla Ciebie nieoczekiwany.";
$l['str_index_migrate'] = 'Migracja danych';
$l['str_migrate_button'] = 'Migruj';
$l['str_migrate_already_done'] = 'Już zmigrowane.';
$l['str_migrate_me'] = 'W celu migracji danych ze starego systemu, przyciśnij poniższy przycisk.<br>
  Spowoduje to zaimportowanie wszystkich Twoich stref i rekordów oraz (w ciągu paru minut) 
  wygenerowanie tych stref na nowych serwerach DNS. <br >Wszystkie zmiany wprowadzone 
  w starym systemie po 23 maja 2010 <b>nie będą</b> przeniesione do nowego systemu.<p>
  Jeżeli nie chcesz korzystać z FreeDNS::42, to możesz albo skasować swoje konto, albo po 
  prostu nic nie robić&nbsp;&mdash;&nbsp;niezmigrowane konta zostaną wraz z zawartością 
  skasowane w sierpniu 2010.<p>Przy okazji też zerknij na swoje ustawienia, zwłaszcza na 
  poprawność adresu email.';
$l['str_migrate_content_x'] = '<dl><dt>Migracja danych</dt><dd>W celu migracji danych 
  ze starego systemu <a href="migrate.php%s">wejdź tutaj</a>.</dd></dl>';
$l['str_migrate_success'] = 'Zmigrowano wszystkie Twoje strefy. Pliki konfiguracyjne wygenerują 
  się w ciągu kwadransa. Parę minut po otrzymaniu maila nowe serwery DNS powinny zacząć 
  obsługiwać Twoje strefy. <p><strong>Po sprawdzeniu</strong>, że nowe serwery DNS poprawnie 
  odpowiadają na zapytania o Twoje domeny, zmień serwery nazw u swojego rejestratora domen. 
  Szczegóły, niestety, zależą od rejestratora.';
$l['str_waiting_to_confirm_x'] = 'adres %s oczekuje na potwierdzenie poprawności.';
$l['str_primary_x_parameter_x_has_to_be_int'] = 'parametr %s (%s) musi być liczbą naturalną; ';
$l['str_you_are_logged_in_as_x'] = 'Zalogowano jako %s.';
$l['str_user_count'] = 'Liczba użytkowników';
$l['str_user_count_prod'] = '...ze strefami';
$l['str_create_migrated'] = '<p><strong>Uwaga!</strong> Jeśli miałeś konto na starym 
  serwisie FreeDNS, to nie zakładaj nowego konta! Po prostu zaloguj się na ten sam login 
  i hasło! I potem sprawdź poprawność adresu email oraz zmień hasło.</p>';
$l['str_migrate_subaccount'] = 'Korzystasz z subkonta, migracji musi dokonać główny użytkownik.';
$l['str_sponsor_title'] = 'Sponsorzy';
$l['str_primary_ptr_generate'] = 'W celu dodania dużej ilości podobnie nazywających się rekordów PTR
  możesz użyć poniższego skrótu, który działa podobnie jak w named.';
?>
