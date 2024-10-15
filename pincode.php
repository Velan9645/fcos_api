<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST,OPTIONS");
header("Content-Type: application/json; charset=UTF-8");
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200); // Let the browser know the request is valid
    exit();
}
// JSON data
$jsonData = '
{
    "621719": {
        "city": "Thular",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621714": {
        "city": "Vanjinapuram",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "608901": {
        "city": "Silambur",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621715": {
        "city": "Kovilur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "612903": {
        "city": "Vangudi",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621701": {
        "city": "Ulliakudi",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621713": {
        "city": "Pilimisai",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "612902": {
        "city": "Udayanatham",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621718": {
        "city": "Vellur",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621801": {
        "city": "Pattanamkurichi",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621709": {
        "city": "Solankudikadu",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621802": {
        "city": "Sengunthapuram",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621803": {
        "city": "Z.Melur",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621851": {
        "city": "Venganur",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621704": {
        "city": "Periyavenmani",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621729": {
        "city": "Ariyalur Cement factory",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621707": {
        "city": "Vettiyur",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621705": {
        "city": "Tamaraikulam",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621901": {
        "city": "Vanavanallur",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621730": {
        "city": "Siluppanur",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621806": {
        "city": "Variankaval",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621804": {
        "city": "Zamin Suthamalli",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621218": {
        "city": "Valaldi",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "612904": {
        "city": "Vazhaikurichi",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621710": {
        "city": "Vallam",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621805": {
        "city": "Varadarajanpettai",
        "state": "Tamil Nadu",
        "district": "Ariyalur"
    },
    "621653": {
        "city": "Sillakkudi",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621703": {
        "city": "Thirumangalam",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621722": {
        "city": "Viragalur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621651": {
        "city": "Varakuppai",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "608703": {
        "city": "Srinedunjeri",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "600018": {
        "city": "Teynampet South",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600020": {
        "city": "Theosophical Society",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600082": {
        "city": "Rajathottam",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600029": {
        "city": "Aminjikarai",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600040": {
        "city": "Anna Nagar",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600102": {
        "city": "Anna Nagar east",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600101": {
        "city": "Anna Nagar western extn",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600002": {
        "city": "Pudupet",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600106": {
        "city": "D G vaishnav college",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600083": {
        "city": "Jafferkhanpet",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600023": {
        "city": "Aynavaram",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600090": {
        "city": "Besantnagar",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600108": {
        "city": "Broadway",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600021": {
        "city": "Washermanpet East",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600113": {
        "city": "Ttti Taramani",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600032": {
        "city": "Guindy Industrial estate",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600001": {
        "city": "Seven Wells",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600005": {
        "city": "Tiruvallikkeni",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600031": {
        "city": "World University centre",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600112": {
        "city": "Choolai",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600094": {
        "city": "Choolaimedu",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600012": {
        "city": "Venkatesapuram",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600025": {
        "city": "Engineering College",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600003": {
        "city": "Ripon Buildings",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600008": {
        "city": "Ethiraj Salai",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600118": {
        "city": "Rv Nagar",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600084": {
        "city": "Purasawalkam",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600028": {
        "city": "Ramakrishna Nagar",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600009": {
        "city": "Fort St george",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600014": {
        "city": "Triplicane South",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600086": {
        "city": "Gopalapuram",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600006": {
        "city": "Teynampet West",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600015": {
        "city": "Saidapet West(mer with sdp)",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600104": {
        "city": "High Court building",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600017": {
        "city": "Thygaraya Nagar south",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600038": {
        "city": "Icf Colony",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600036": {
        "city": "Indian Institute of technology",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600078": {
        "city": "Kalaignar Karunanidhi nagar",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600013": {
        "city": "Royapuram Market",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600024": {
        "city": "Rangarajapuram",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600010": {
        "city": "New Avadi road",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600085": {
        "city": "Kotturpuram",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600107": {
        "city": "Nerkundram",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600092": {
        "city": "Virugambakkam",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600033": {
        "city": "West Mambalam",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600034": {
        "city": "Nungambakkam High road",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600004": {
        "city": "Vivekananda College madras",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600079": {
        "city": "Sowcarpet",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600035": {
        "city": "Nandanam",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600030": {
        "city": "Shenoy Nagar",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600011": {
        "city": "Sembiam",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600022": {
        "city": "Rajbhavan",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600093": {
        "city": "Saligramam",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600041": {
        "city": "Palavakkam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600081": {
        "city": "Tondiarpet West",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600026": {
        "city": "Vadapalani",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600042": {
        "city": "Velacheri",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600007": {
        "city": "Vepery",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "600039": {
        "city": "Vyasarpadi",
        "state": "Tamil Nadu",
        "district": "Chennai"
    },
    "642205": {
        "city": "Vadugapalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642002": {
        "city": "T.Kottampatti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641663": {
        "city": "Vanjipalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641110": {
        "city": "Vellamadai",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642004": {
        "city": "Uthukuli Zamin",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642127": {
        "city": "Vellonie",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641302": {
        "city": "Thimmanur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642110": {
        "city": "Vadakkipalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641665": {
        "city": "Thonguttipalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641101": {
        "city": "Tenkarai",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641655": {
        "city": "Thandukaranpalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642101": {
        "city": "Upper Aliyar dam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641653": {
        "city": "Vadakkalur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642201": {
        "city": "Periapatti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642102": {
        "city": "Kallapuram",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642103": {
        "city": "Subbegoundenpudur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641108": {
        "city": "Veerapandi-tadagam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642104": {
        "city": "Thathur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642154": {
        "city": "Thumbalapatti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641687": {
        "city": "Iduvoi",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642007": {
        "city": "Vedasanthur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641664": {
        "city": "Vengitapuram",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641652": {
        "city": "Velampalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641402": {
        "city": "Sulur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641604": {
        "city": "Tirupur Bazaar",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641032": {
        "city": "Valukkuparai",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641103": {
        "city": "Ravathur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642206": {
        "city": "Sengattupalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641654": {
        "city": "Velayuthampalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641603": {
        "city": "Sirupuluvapatti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641104": {
        "city": "Velliankadu",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641046": {
        "city": "Marudamalai",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641113": {
        "city": "Vivekanandapuram",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641019": {
        "city": "Veerapandi Periyanaickenpalaya",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641105": {
        "city": "Thirumalayampalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641658": {
        "city": "Siddanaickenpalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641018": {
        "city": "Redfields",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641669": {
        "city": "Velappanaickenpalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642207": {
        "city": "Vilamarathupatti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641659": {
        "city": "Vaharayampalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641029": {
        "city": "Vellakinar",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641201": {
        "city": "Periyakuyilai",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642120": {
        "city": "Virugalpatti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642106": {
        "city": "Periya Kallar",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641006": {
        "city": "Maniakarampalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641001": {
        "city": "Sukkirawarapettai",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641014": {
        "city": "Venkitapuram",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641009": {
        "city": "Ramnagar",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641021": {
        "city": "Malumichampatti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642202": {
        "city": "Vagatholuvu",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641305": {
        "city": "Palapatti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641109": {
        "city": "Viraliyur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642132": {
        "city": "Valavadi",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642005": {
        "city": "Zamin Muthur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641667": {
        "city": "Pongalur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642112": {
        "city": "Thirumurthi Nagar",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "638461": {
        "city": "Tegnarai",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "641016": {
        "city": "Pidampalli",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641025": {
        "city": "Velandipalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641697": {
        "city": "Vadavalli-karamadai",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642126": {
        "city": "Udamalpet South",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642122": {
        "city": "Senjellappagoundenpudur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642001": {
        "city": "Pollachi R.s",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641004": {
        "city": "Peelamedu East",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641012": {
        "city": "Tatabad",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641107": {
        "city": "Sarkarsamakulam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641401": {
        "city": "Kangayampalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642107": {
        "city": "Thippampatti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641013": {
        "city": "Govt.College of technology",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641047": {
        "city": "Samichettipalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641668": {
        "city": "Subarayanpudur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641022": {
        "city": "Sengalipalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641666": {
        "city": "Vavipalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642108": {
        "city": "Paralai",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641671": {
        "city": "Vavipalayamkettanur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642203": {
        "city": "Vedapatti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641662": {
        "city": "Sukkampalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641010": {
        "city": "Titipalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641048": {
        "city": "Kalapatti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642129": {
        "city": "Vettaikaran Pudur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641602": {
        "city": "Tirupur North",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642003": {
        "city": "Unjavelampatti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642130": {
        "city": "Vellamalai",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641670": {
        "city": "Vettuvapalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641601": {
        "city": "Tirupur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641114": {
        "city": "Siruvani Adivaram",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641030": {
        "city": "Kavundampalayam Colony",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641035": {
        "city": "Vilankurichi",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642109": {
        "city": "Thamaraikulam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641608": {
        "city": "Knp Colony",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "638660": {
        "city": "Nelali",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "642204": {
        "city": "Uralpatti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641023": {
        "city": "Podanur Newtown",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641042": {
        "city": "Kovaipudur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642111": {
        "city": "Krishnapuram",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641045": {
        "city": "Ramanathapuram",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641008": {
        "city": "Sugunapuram",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641038": {
        "city": "Kuppakonanpudur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641202": {
        "city": "Vadasithur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "638462": {
        "city": "Vemandampalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "641003": {
        "city": "Lawley Road",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642113": {
        "city": "Solamadevi",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642114": {
        "city": "Malayandipattinam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641607": {
        "city": "Sarkarperiapalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "641606": {
        "city": "Vijayapuram",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "638103": {
        "city": "Vellaraveli",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "641301": {
        "city": "Mettupalayam East",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642105": {
        "city": "Waverly",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642117": {
        "city": "Nallamudi",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642118": {
        "city": "Sheikalmudi",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641020": {
        "city": "Thekkupalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641005": {
        "city": "Singanallur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641036": {
        "city": "Nanjundapuram",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641031": {
        "city": "Rakkipalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641033": {
        "city": "Neelikonampalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641028": {
        "city": "Sowripalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641011": {
        "city": "Saibaba Mission",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641017": {
        "city": "Vadamadurai Kurudampalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642131": {
        "city": "Pannimade",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641037": {
        "city": "Pappanaickenpalayam West",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641041": {
        "city": "Vadavalli",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "638458": {
        "city": "Suriappampalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "642134": {
        "city": "Somandurai",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641106": {
        "city": "Pillurdam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641002": {
        "city": "Rathinasabapathy Puram",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641027": {
        "city": "Rathinapuri",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641007": {
        "city": "Veerakeralam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641043": {
        "city": "Sahs College",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642123": {
        "city": "Zamin Kottampatti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642133": {
        "city": "Topslip",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641026": {
        "city": "Selvapuram",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642124": {
        "city": "Sholayar",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642125": {
        "city": "Sholayar Nagar",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641044": {
        "city": "Siddhapudur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641062": {
        "city": "Sinniampalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642153": {
        "city": "Sirukundra",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642006": {
        "city": "Suleeswaran Patti",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641024": {
        "city": "Sundarapuram",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641039": {
        "city": "Telungupalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641034": {
        "city": "Tudiyalur",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641015": {
        "city": "Uppilipalayam",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "641605": {
        "city": "Ugayanur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "641111": {
        "city": "Vellalore",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "642128": {
        "city": "Venkatesa Mills",
        "state": "Tamil Nadu",
        "district": "Coimbatore"
    },
    "607802": {
        "city": "Vadakkuvelur",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "606304": {
        "city": "Veppur (sa)",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608801": {
        "city": "Thiyagavalli",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607302": {
        "city": "Virupakshi",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608702": {
        "city": "Veeramudayanatham",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608502": {
        "city": "Small Bazaar",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607205": {
        "city": "Varinjipakkam",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "606106": {
        "city": "Vagaiyur",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607003": {
        "city": "Vellakarai",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607101": {
        "city": "Somasipalayam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "607109": {
        "city": "Vellapakkam",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "606108": {
        "city": "Vallimaduram",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "606303": {
        "city": "Venganur",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608305": {
        "city": "Vilagam",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607301": {
        "city": "Vasanankuppam",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608704": {
        "city": "Valayamadevi",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608401": {
        "city": "Vallampadugai",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607110": {
        "city": "Anguchettipalayam",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608002": {
        "city": "Uthamacholamangalam",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608301": {
        "city": "Veeranandapuram",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607103": {
        "city": "Siruthondamadevi",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608306": {
        "city": "Omampuliyur",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608201": {
        "city": "Vakkur",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608601": {
        "city": "Puvalai",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608501": {
        "city": "Villiyanallur",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607102": {
        "city": "Silambinathanpettai",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607108": {
        "city": "Puthupet (cdl)",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607001": {
        "city": "Vilvarayanatham",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607801": {
        "city": "Neyveli 1",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607803": {
        "city": "Neyveli General hospital",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607807": {
        "city": "Neyveli Thermal bus stand",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "606001": {
        "city": "Vriddhachalam Cutchery",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "606110": {
        "city": "Therku Vadakku puthur",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608302": {
        "city": "Vannaiyur",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608102": {
        "city": "Thillaividangan",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608602": {
        "city": "Vayalur",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607005": {
        "city": "Sipcot Cuddalore",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "605106": {
        "city": "Nallathur",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608304": {
        "city": "Sirukattur",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608001": {
        "city": "Kanagasabainagar",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "606104": {
        "city": "Vijayamanagaram",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "606103": {
        "city": "Sathapadi",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "606302": {
        "city": "Vilangattur",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608303": {
        "city": "Tirunaraiyur",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607104": {
        "city": "Sornavur Melpathi",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607308": {
        "city": "Gandhi Nagar",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "606111": {
        "city": "Tolar",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607105": {
        "city": "Vanpakkam",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607002": {
        "city": "Tiruppadiripuliyur West",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607805": {
        "city": "Visoor",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607106": {
        "city": "Tiruvatigai",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "608701": {
        "city": "Vanamadevi",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607303": {
        "city": "Vanathirayapuram",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "606105": {
        "city": "Pennadam",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607112": {
        "city": "Pagandai",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607804": {
        "city": "Uttangal",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607004": {
        "city": "Vandipalayam",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "605007": {
        "city": "Singirikoil",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "606120": {
        "city": "Mukhasaparur",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607401": {
        "city": "Tiruvendhipuram",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "607402": {
        "city": "Thokkanambakkam",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "606123": {
        "city": "Sirupakkam",
        "state": "Tamil Nadu",
        "district": "Cuddalore"
    },
    "636704": {
        "city": "Venkatenahalli",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636807": {
        "city": "Samichettipatti",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636905": {
        "city": "Venkatasamudram",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "635205": {
        "city": "Periyanahalli",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636903": {
        "city": "Veppampatti",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636803": {
        "city": "Somenahalli",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636810": {
        "city": "Vattuvanahalli",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636904": {
        "city": "Tenkaraikottai",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636114": {
        "city": "Thumbal",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636801": {
        "city": "Ammanimallapuram",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636906": {
        "city": "Ammapalayam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636813": {
        "city": "Sathiyanathapuram",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636811": {
        "city": "Perumbalai",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "635201": {
        "city": "Thathampatti",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636805": {
        "city": "Veppalahalli",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636808": {
        "city": "Yelangalpatti",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636806": {
        "city": "Samanur",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "635301": {
        "city": "Veppilaimuthampatti",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636804": {
        "city": "Narthampatti",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "635302": {
        "city": "Vaguthupatti",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636809": {
        "city": "Sogathur",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "635202": {
        "city": "Vellalapatti",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "635305": {
        "city": "Sitrapatti",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636701": {
        "city": "Mathikonpalayam",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636705": {
        "city": "Vennampatti",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636902": {
        "city": "Mobiripatti",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636802": {
        "city": "Hanumanthapuram",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "635303": {
        "city": "Venkatadrihalli",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636352": {
        "city": "Thoppur",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "636812": {
        "city": "Thumjepalli",
        "state": "Tamil Nadu",
        "district": "Dharmapuri"
    },
    "624302": {
        "city": "Perumalkoilpatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624702": {
        "city": "Sriramapuram",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624212": {
        "city": "Vengalapatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624003": {
        "city": "Thazhakadai",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624101": {
        "city": "Vilpatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624709": {
        "city": "Viralipatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624710": {
        "city": "Vedasandur",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624303": {
        "city": "Veerakkal",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624620": {
        "city": "Tirukoornam",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624703": {
        "city": "Ulliyakottai",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624613": {
        "city": "Varthamanathi Dam project",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624612": {
        "city": "Thangachiammapatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624622": {
        "city": "S.Vadipatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624201": {
        "city": "Pallapatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624621": {
        "city": "Thathanaickenpatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624001": {
        "city": "Pandianagar",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624308": {
        "city": "Vembarpatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624617": {
        "city": "Velampatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624616": {
        "city": "Tirumalaigoundenvalasu",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624619": {
        "city": "Veriyappur",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624701": {
        "city": "Attur",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624401": {
        "city": "Vathipatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624304": {
        "city": "Veerasinnnampatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624801": {
        "city": "Sukkampatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624211": {
        "city": "Sevugampatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624005": {
        "city": "Thottanuthu",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624610": {
        "city": "Palarparundalar Dam",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624202": {
        "city": "Yeluvanampatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624002": {
        "city": "Sindalagundu",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624708": {
        "city": "Sithayankottai",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624614": {
        "city": "Virupatchi",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624802": {
        "city": "Vadamadurai",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624402": {
        "city": "Uralipatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624314": {
        "city": "Chettiapatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624615": {
        "city": "Thamaraikulam",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624712": {
        "city": "Markkampatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624301": {
        "city": "Chinnalapatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624204": {
        "city": "Nellur",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624711": {
        "city": "Viruthalaipatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624714": {
        "city": "Dharmathupatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624004": {
        "city": "Settinaickenpatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624219": {
        "city": "Vilampatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624054": {
        "city": "Hanumantharayankottai",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624704": {
        "city": "Valayapatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624206": {
        "city": "Uthupatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624216": {
        "city": "Tandigudi",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624306": {
        "city": "Vaithilathoppampatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624705": {
        "city": "Thettupatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624215": {
        "city": "Silukkuvarpatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624103": {
        "city": "Puthuputhur",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624403": {
        "city": "Sendurai",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624618": {
        "city": "Thalaiyuthu",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624706": {
        "city": "Vadugampadi",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624220": {
        "city": "Viruveedu",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624707": {
        "city": "Vannampatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624210": {
        "city": "Pannaikadu",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624307": {
        "city": "Vellodu",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624208": {
        "city": "Nilakottai",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624624": {
        "city": "Palakkanuthu",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624601": {
        "city": "Palani West",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624316": {
        "city": "Rajakkapatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624213": {
        "city": "Ramarajapuram",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624312": {
        "city": "Samiyarpatti",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624404": {
        "city": "Sirugudi",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "624228": {
        "city": "Sitharevu",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "639203": {
        "city": "Zamin Athur",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "624803": {
        "city": "Velvarkottai",
        "state": "Tamil Nadu",
        "district": "Dindigul"
    },
    "638502": {
        "city": "Savandapur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638673": {
        "city": "Veerajimangalam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638111": {
        "city": "Vellakoil Bazaar",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638454": {
        "city": "Odayagoundenpalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638701": {
        "city": "Veeranampalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638501": {
        "city": "Thavittupalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638656": {
        "city": "Hanumanthapuram",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638455": {
        "city": "Singanallur Kvp",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638457": {
        "city": "Kurumandur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638453": {
        "city": "Kottupullampalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638459": {
        "city": "Sellappampalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638109": {
        "city": "Vilakethi",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638311": {
        "city": "Varadhanallur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638752": {
        "city": "Uttukuli Rs",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "639202": {
        "city": "Uttupatti",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "638151": {
        "city": "Pondilingapuram",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "638315": {
        "city": "Vellapalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638101": {
        "city": "Veerappampalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638401": {
        "city": "Varadampalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638506": {
        "city": "Thucknaickenpalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "639201": {
        "city": "Rajapuram",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "638402": {
        "city": "Vinnapalli",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638115": {
        "city": "Velankattuvalasu",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638503": {
        "city": "Satamugai",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638051": {
        "city": "Sanarpalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638702": {
        "city": "Surianallur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638301": {
        "city": "Varnapuram",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638451": {
        "city": "Thoppampalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638007": {
        "city": "Kokkarayanpettai",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638812": {
        "city": "Virumandampalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638504": {
        "city": "Reddipalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638004": {
        "city": "Veerappanchatram",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638106": {
        "city": "Thurambadi",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638657": {
        "city": "Thoppampatti",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638102": {
        "city": "Vadakuthaiyurpalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638327": {
        "city": "Dalavaipettai",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638751": {
        "city": "Uttukuli",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638672": {
        "city": "Selampalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638009": {
        "city": "Thindal",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638316": {
        "city": "Vasavi College",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638104": {
        "city": "Velampalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638460": {
        "city": "Savakattupalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638505": {
        "city": "Perumugaipudur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638001": {
        "city": "Erode South",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638011": {
        "city": "Erode Collectorate",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638002": {
        "city": "Pudur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638110": {
        "city": "Thoranavavi",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638112": {
        "city": "Vallipurathanpalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638452": {
        "city": "Gobichettipalayam East",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638476": {
        "city": "Pudupalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638056": {
        "city": "Voipodi",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638058": {
        "city": "Ingur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638312": {
        "city": "Vairamangalam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638466": {
        "city": "Kadathur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638107": {
        "city": "Vilarasampatti",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638314": {
        "city": "Vellitirupur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638661": {
        "city": "Vellavavipudur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638706": {
        "city": "Sirukinar",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638116": {
        "city": "Thaneerpandalpalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638052": {
        "city": "Thoppupalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638003": {
        "city": "Vairapalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638154": {
        "city": "Vellottamparappu",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638456": {
        "city": "Talguni",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638152": {
        "city": "Vengampur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638108": {
        "city": "Palayakottai",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638313": {
        "city": "Pudukkaraipudur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638703": {
        "city": "Vengipalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638055": {
        "city": "Vetaiyankinar",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638105": {
        "city": "Vellierichal",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638153": {
        "city": "Muthayeepalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638057": {
        "city": "Tudupathi",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "639204": {
        "city": "Nanjaithalaiyur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638005": {
        "city": "Ramanathapuram Pudur",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638053": {
        "city": "Perundurai Sanitorium",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638512": {
        "city": "Punjaithuraiyampalayam",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638010": {
        "city": "Spb Colony",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "638054": {
        "city": "Vellankoil",
        "state": "Tamil Nadu",
        "district": "Erode"
    },
    "603301": {
        "city": "Seethapuram",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600088": {
        "city": "Nilamangai Nagar",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603406": {
        "city": "Vadanallur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603001": {
        "city": "Melamayoor",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600016": {
        "city": "St.Thomas mount",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603402": {
        "city": "Pennalur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603109": {
        "city": "Veerapuram",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603312": {
        "city": "Tiruvadur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600070": {
        "city": "Anakaputhur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603107": {
        "city": "Valathodu",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603307": {
        "city": "Vadamanipakkam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603401": {
        "city": "Velur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603204": {
        "city": "Venkatapuram",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603127": {
        "city": "Anupuram",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603405": {
        "city": "Vallipuram",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "631603": {
        "city": "Vayalakkavur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603106": {
        "city": "Vitchur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603306": {
        "city": "Veeranakunnam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "631605": {
        "city": "Walajabad",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603101": {
        "city": "Villiambakkam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "631561": {
        "city": "Vedal",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603310": {
        "city": "Thozhupedu",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603102": {
        "city": "Vittilapuram",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "631601": {
        "city": "Thimmarajampettai",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "631502": {
        "city": "Veliyur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "631551": {
        "city": "Muthavedu",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600117": {
        "city": "Old Pallavaram",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600044": {
        "city": "Tiruneermalai",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603308": {
        "city": "Tiruvandavar",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "631553": {
        "city": "Valathur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603002": {
        "city": "Vallam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603302": {
        "city": "Zamin Budur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600027": {
        "city": "Minambakkam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603313": {
        "city": "Vilanganur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600064": {
        "city": "Hasthinapuram",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600059": {
        "city": "Tambaram East",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "631604": {
        "city": "Varanavasi",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603201": {
        "city": "Padiri",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "602101": {
        "city": "Paraniputhur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "601302": {
        "city": "Pallikaranai",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603202": {
        "city": "Urapakkam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "602105": {
        "city": "Valarpuram",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603108": {
        "city": "Tiruvadisoolam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603110": {
        "city": "Venbedu",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600056": {
        "city": "Senneerkuppam",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "603303": {
        "city": "Vedavakkam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603305": {
        "city": "Vepancheri",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603104": {
        "city": "Zamin Paiyanur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600047": {
        "city": "Tambaram Sanatorium",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "631501": {
        "city": "Tirukachinambi Street",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "602108": {
        "city": "Tirupandiyur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "631552": {
        "city": "Siruvallur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603203": {
        "city": "Ninnakarai",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603314": {
        "city": "Vellaputhur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603103": {
        "city": "Thaiyur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "631402": {
        "city": "Perambakkam",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600048": {
        "city": "Vandalur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603304": {
        "city": "Vilambur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603112": {
        "city": "Thiruvidanthai",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600069": {
        "city": "South Malayambakkam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603105": {
        "city": "Sirudavur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600073": {
        "city": "Sithalapakkam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "631606": {
        "city": "Ullavur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600091": {
        "city": "Madipakkam South",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "601301": {
        "city": "Serpananchery",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603111": {
        "city": "Venpakkam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "602106": {
        "city": "Sunguvarchatram",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603403": {
        "city": "Thandarai",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600116": {
        "city": "Sriramachandra Deemed uty",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603209": {
        "city": "Panangottur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603319": {
        "city": "Sirunagalur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603309": {
        "city": "Polambakkam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600089": {
        "city": "Ramapuram",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600061": {
        "city": "Nanganallur South",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600096": {
        "city": "Perungudi",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600097": {
        "city": "Oggiamthoraipakkam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600063": {
        "city": "Srinivasanagar East",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603311": {
        "city": "Zamin Endathur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600043": {
        "city": "Tirusulam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600075": {
        "city": "Pammal East",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600114": {
        "city": "Pazhavanthangal",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "603404": {
        "city": "Perunagar",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600074": {
        "city": "Sithathur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600119": {
        "city": "Sholinganallur",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "602109": {
        "city": "Somangalam",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600045": {
        "city": "Tambaram",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "600046": {
        "city": "Tambaram Iaf",
        "state": "Tamil Nadu",
        "district": "Kanchipuram"
    },
    "629153": {
        "city": "Meenachel",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629701": {
        "city": "Agasteeswaram",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629167": {
        "city": "Mulagumoodu",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629170": {
        "city": "Palukal",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629159": {
        "city": "Sahayanagar",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629101": {
        "city": "Pathukani",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629802": {
        "city": "Thalakulam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629801": {
        "city": "Vembanur",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629204": {
        "city": "Kalpadi",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629201": {
        "city": "Santhapuram",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629851": {
        "city": "Thadikarankonam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629168": {
        "city": "Thickurichy",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629401": {
        "city": "Variyoor",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629301": {
        "city": "Kumarapuram",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629151": {
        "city": "Manjalumoodu",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629177": {
        "city": "Veeyannur",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629704": {
        "city": "Vazhukkamparai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629191": {
        "city": "Attur",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629252": {
        "city": "Mondaikad",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629202": {
        "city": "Muttom",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629803": {
        "city": "Neyyoor West",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629852": {
        "city": "Tittivilai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629001": {
        "city": "Vadiveeswaram",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629166": {
        "city": "Verkilambi",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629804": {
        "city": "Thickanamcode",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629304": {
        "city": "Chenbagaramanputhur",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629161": {
        "city": "Vendalicode",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629152": {
        "city": "Vellachiparai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629807": {
        "city": "Chunkankadai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629251": {
        "city": "Vaniyakudi",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629501": {
        "city": "South Soorankudy",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629051": {
        "city": "Edalakudy",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629171": {
        "city": "Vencode",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629193": {
        "city": "Ramanthurai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629902": {
        "city": "Erachakulam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629158": {
        "city": "Maruthurkurichi",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629402": {
        "city": "Marungoor",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629004": {
        "city": "Nagercoil Industrial estate",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629160": {
        "city": "Vallavilai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629203": {
        "city": "Saral Agasteeswaram",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629502": {
        "city": "Rajakkamangalam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629165": {
        "city": "Viricode",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629197": {
        "city": "Irenipuram",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629002": {
        "city": "Maravankudiyiruppu",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629504": {
        "city": "James Town",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629253": {
        "city": "Kadiyapattanam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629855": {
        "city": "Kadukkarai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629808": {
        "city": "Kallukoottam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629810": {
        "city": "Kandanvilai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629003": {
        "city": "Vetturnimadam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629154": {
        "city": "Nithiravilai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629169": {
        "city": "Palliyadi",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629155": {
        "city": "Kanjiracode",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629702": {
        "city": "Vivekanandapuram",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629156": {
        "city": "Kappiyarai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629162": {
        "city": "Mulankuzhi",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629809": {
        "city": "Peyankuzhi",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629157": {
        "city": "Tholayavattai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629806": {
        "city": "Kattimancode",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629854": {
        "city": "Keeriparai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629174": {
        "city": "Thiruvithancode",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629187": {
        "city": "Killiyoor",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629181": {
        "city": "Kirathur",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629102": {
        "city": "Kodayarkilthangal",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629703": {
        "city": "Santhaiyadi",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629403": {
        "city": "Mayiladi",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629180": {
        "city": "Villukuri",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629805": {
        "city": "Kurunthencode",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629163": {
        "city": "Vanniyur",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629302": {
        "city": "Thovalai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629164": {
        "city": "Velimalai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629178": {
        "city": "Udayamarthandam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629601": {
        "city": "Parakkai",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629602": {
        "city": "Puthalam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629172": {
        "city": "S.T.mankad",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629175": {
        "city": "Thuckalay",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629195": {
        "city": "Nattalam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629194": {
        "city": "Padanthalumoodu",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629188": {
        "city": "Painkulam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629176": {
        "city": "Thuthur",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629303": {
        "city": "Ramapuram",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629190": {
        "city": "Sooriacode",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629707": {
        "city": "Thamaraikulam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629901": {
        "city": "Thirupathisaram",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629603": {
        "city": "Thengamputhur",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629173": {
        "city": "Vizhunthaiyambalam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629708": {
        "city": "Therku Thamaraikulam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629183": {
        "city": "Thiruvarambu",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629179": {
        "city": "Unnamalakada",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "629305": {
        "city": "Vellamadam",
        "state": "Tamil Nadu",
        "district": "Kanyakumari"
    },
    "639207": {
        "city": "Verisinampatti",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "621311": {
        "city": "Thavalaveeranpatti",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621313": {
        "city": "Vadaseri",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639002": {
        "city": "Viswanathapuri",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639003": {
        "city": "Tirumanilaiyur",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639111": {
        "city": "Paramathi (karur)",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639118": {
        "city": "Velliyanai",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639206": {
        "city": "Tennilai",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639120": {
        "city": "Vaiganallur",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639105": {
        "city": "Vadiyam",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "621301": {
        "city": "Vellapatti Zamin",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639113": {
        "city": "West Orathai",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639005": {
        "city": "Thanthonimalai",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639004": {
        "city": "Senapiratti",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639107": {
        "city": "Thannirpalli",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639110": {
        "city": "Nungavaram",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "639205": {
        "city": "Velampadi",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639006": {
        "city": "Vennamalai",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639136": {
        "city": "Punnamchatram",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639108": {
        "city": "Valayalkaranpudur",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639001": {
        "city": "Vaiyapurinagar",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639119": {
        "city": "Veeriyapalayam",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639102": {
        "city": "Tirukkampuliyur",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639114": {
        "city": "Veerarakkiam",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639104": {
        "city": "Manathattai",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639116": {
        "city": "Vangal East",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639106": {
        "city": "Mahadhanapuram",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639109": {
        "city": "Venjamangudalur",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "639117": {
        "city": "Vettamangalam",
        "state": "Tamil Nadu",
        "district": "Karur"
    },
    "621315": {
        "city": "Vaiyampatti",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "635105": {
        "city": "Thummanapalli",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635108": {
        "city": "Sadanapalli",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635110": {
        "city": "Panchakshipuram",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635118": {
        "city": "Thally Kothanur",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635204": {
        "city": "Viramalai",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635122": {
        "city": "Sembadamuthur",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635001": {
        "city": "Pothinayanapalli",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635203": {
        "city": "Thogarapalli",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635104": {
        "city": "Venkatasamudram",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635206": {
        "city": "Santhur",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635304": {
        "city": "Tiruvanapatti",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635102": {
        "city": "Urigam",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635306": {
        "city": "Valipatti",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635107": {
        "city": "Thadigal",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635307": {
        "city": "Singarapettai",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635109": {
        "city": "Venkatesapuram",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635103": {
        "city": "Sevaganapalli",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635113": {
        "city": "Ullukurukki",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635121": {
        "city": "Virupasandiram",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635116": {
        "city": "Royakottah",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635123": {
        "city": "Vadamangalam",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635106": {
        "city": "Thimmarayanahalli",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635115": {
        "city": "Thippanapalli",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635126": {
        "city": "Mookandapalli",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635124": {
        "city": "Belathur",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635120": {
        "city": "Varattanapalli",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635111": {
        "city": "Mukkulam",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635117": {
        "city": "Shoolagiri",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635114": {
        "city": "Saragapalli",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635112": {
        "city": "Thimmapuram",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635101": {
        "city": "Sundekuppam",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635119": {
        "city": "Uddanapalli",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635207": {
        "city": "Venkatadampatti",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "635002": {
        "city": "Krishnagiri Indl. estate",
        "state": "Tamil Nadu",
        "district": "Krishnagiri"
    },
    "625706": {
        "city": "Vidathakulam",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625514": {
        "city": "Nadumudalaikulam",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625501": {
        "city": "Vavidaimaruthur",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625704": {
        "city": "T.Pudupatti",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625301": {
        "city": "Pulipatti",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625003": {
        "city": "Tvs Nagar",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625109": {
        "city": "Vellalur",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625527": {
        "city": "Chinnakattalai",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625017": {
        "city": "Vagaikulam",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625020": {
        "city": "Varichiyur",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625218": {
        "city": "Vadipatti",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625009": {
        "city": "Viraganur",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625016": {
        "city": "West Ponnagaram",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625106": {
        "city": "Suragundu",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625532": {
        "city": "Valandur",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625105": {
        "city": "Sennagarampatti",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625104": {
        "city": "Vowalthottam",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625705": {
        "city": "Thullukuttinayakanur",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625108": {
        "city": "Thumbaipatti",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625008": {
        "city": "Thoppur",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625701": {
        "city": "Vellakulam",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625012": {
        "city": "Villapuram",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625537": {
        "city": "Vellamalaipatti",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625221": {
        "city": "Thiruvalavayanallur",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625207": {
        "city": "Vikramangalam",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625103": {
        "city": "Valaicheripatti",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625014": {
        "city": "Velichanatham",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625503": {
        "city": "Vellayampatti",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625566": {
        "city": "Chellampatti",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625707": {
        "city": "Villur",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625122": {
        "city": "Vellaripatti",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625703": {
        "city": "Silamalaipatti",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625007": {
        "city": "Surveyor Colony",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625535": {
        "city": "Yelumalai",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625019": {
        "city": "Vadivelkarai",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625708": {
        "city": "T.Kunnathur",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625005": {
        "city": "Thiruparankundram",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625201": {
        "city": "Silaiman",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625205": {
        "city": "Nachikulam",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625011": {
        "city": "Subramaniapuram",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625702": {
        "city": "Velambur",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625102": {
        "city": "Muthusamypatti",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625101": {
        "city": "Vanjinagaram",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625234": {
        "city": "Tiruvedagam",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625529": {
        "city": "Veppanuthu",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625002": {
        "city": "Tallakulam",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625107": {
        "city": "Uthangudi",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625001": {
        "city": "Yanaikkal",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625022": {
        "city": "Valayapatti",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625018": {
        "city": "Visalakshi Nagar",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625502": {
        "city": "Mettupatti",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625021": {
        "city": "Vadapalanji",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625006": {
        "city": "Vilacheri",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625209": {
        "city": "Pandiarajapuram",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625004": {
        "city": "Pasumalai",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625402": {
        "city": "Vayalur",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625110": {
        "city": "Tiruvadur",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625214": {
        "city": "Sholavandan Bazaar",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625015": {
        "city": "Thiagarajar Engg college",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "625217": {
        "city": "Tiruvedagam West",
        "state": "Tamil Nadu",
        "district": "Madurai"
    },
    "609403": {
        "city": "Sirupuliyur",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "609101": {
        "city": "Thandavankulam",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609701": {
        "city": "Vadagarai",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "614707": {
        "city": "Pannal",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609703": {
        "city": "Tittachery",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "614810": {
        "city": "Vedaraniam",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "611106": {
        "city": "Vadakkupoigainallur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609301": {
        "city": "Umayalpuram",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609801": {
        "city": "Tirumananjeri",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609604": {
        "city": "Alathur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609118": {
        "city": "Tirunandriyur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "611117": {
        "city": "Aliyur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609503": {
        "city": "Sembiyanallur",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "609102": {
        "city": "Nallanayagapuram",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609103": {
        "city": "Keelamaruthandanallur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "610106": {
        "city": "Thappalampuliyur",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "611102": {
        "city": "Chinnathumbur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609109": {
        "city": "Tiruvali",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "614714": {
        "city": "Vanduvancheri",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "612201": {
        "city": "Vayalur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609302": {
        "city": "Muthur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609111": {
        "city": "Vilanthida Samudram",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "614809": {
        "city": "Topputhurai",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609203": {
        "city": "Villiyanallur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "614711": {
        "city": "Pamani-ttp",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "609309": {
        "city": "Tiruchempalli",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "611105": {
        "city": "Serunallur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609117": {
        "city": "Vaithiswarankoil West",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609204": {
        "city": "Tirumeniarkoil",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "613702": {
        "city": "Tiruvidavasal",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "611108": {
        "city": "Sikkal",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "614806": {
        "city": "Thennampulam",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609303": {
        "city": "Kattuchery",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609312": {
        "city": "Tirukkalachery",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609307": {
        "city": "Porayar R.s.",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609003": {
        "city": "Sholampettai",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609001": {
        "city": "Tiruvilandur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "611002": {
        "city": "Panangudi",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609805": {
        "city": "Kozhaiyur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609115": {
        "city": "Vettangudi",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609401": {
        "city": "Valuvur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609116": {
        "city": "Valluvakudi",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609501": {
        "city": "Vilagam",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "611109": {
        "city": "Vadugachery",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609108": {
        "city": "Tirumailadi",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609601": {
        "city": "Ervadi",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "610212": {
        "city": "Ettukudi",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609201": {
        "city": "Talanayar Vsk",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609308": {
        "city": "Sankaranpandal",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609104": {
        "city": "Umayalpathi",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "611101": {
        "city": "Semangalam",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "609811": {
        "city": "Tirumangalam",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609809": {
        "city": "Kamakshipuram",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "611110": {
        "city": "Tirupundi South",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "610101": {
        "city": "Visalur",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "609304": {
        "city": "Melapathi",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "612203": {
        "city": "Suraikkayur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609112": {
        "city": "Tirupungur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "611103": {
        "city": "Venmanachery",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "614808": {
        "city": "Panayadikuthagai",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609105": {
        "city": "Vanagiri",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609107": {
        "city": "Talachangadu",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609106": {
        "city": "Tirunagari",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609402": {
        "city": "Kiliyanur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609202": {
        "city": "Manalmedu East",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "611104": {
        "city": "Tirukannangudi",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609314": {
        "city": "Vadakarai",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "614807": {
        "city": "Kodiakkarai",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "610207": {
        "city": "Valivalam",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "611112": {
        "city": "Vilundamavadi",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609113": {
        "city": "Tirumullaivasal",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609806": {
        "city": "Vanathirajapuram",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "614712": {
        "city": "Vadugur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609404": {
        "city": "Peruncheri",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609313": {
        "city": "Tarangambadi",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609114": {
        "city": "Tiruvengadu",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609305": {
        "city": "Mannampandal",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609702": {
        "city": "Tirumarugal",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "611001": {
        "city": "Velippalayam",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "610204": {
        "city": "Tiruvaimoor",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "610201": {
        "city": "Kachanam",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "611003": {
        "city": "Palpannaichery",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609306": {
        "city": "Velampudukudi",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609802": {
        "city": "Tiyagarajapuram",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "611118": {
        "city": "Nirthanamangalam",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609807": {
        "city": "Tirumangaicherry",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "609406": {
        "city": "Perambur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609704": {
        "city": "Tirupugalur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "611111": {
        "city": "Vailankanni West",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609205": {
        "city": "Tiruvalaputhur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609504": {
        "city": "Thuthukudi",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614820": {
        "city": "Sembodai",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609310": {
        "city": "Tiruvidaikali",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609110": {
        "city": "Sirkali",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "610203": {
        "city": "Vikkirapandiyam",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "609808": {
        "city": "Terizhandur",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "614716": {
        "city": "Pichankottagam",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "609804": {
        "city": "Tiruloki",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "609311": {
        "city": "Tirumeignanam",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "612102": {
        "city": "Suriyanarkoil",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "609810": {
        "city": "Tiruvalangadu",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609803": {
        "city": "Tiruvavaduthurai",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609505": {
        "city": "Tiruvizhimazhalai",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "609506": {
        "city": "Vishnupuram",
        "state": "Tamil Nadu",
        "district": "Nagapattinam"
    },
    "637403": {
        "city": "Sarkar Nattamangalam",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637210": {
        "city": "Zamin Elampalli",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637411": {
        "city": "Veeraganurpatti",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637202": {
        "city": "Ramapuram",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637212": {
        "city": "Velagoundampatti",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637503": {
        "city": "Vadugapalayam",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637409": {
        "city": "Sendamangalam",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "638008": {
        "city": "Sowdapuram",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637020": {
        "city": "Valayapatti",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637013": {
        "city": "Varadarajapuram",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637505": {
        "city": "Vennandur",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637401": {
        "city": "Muthukalipatti",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637304": {
        "city": "Vengipalayam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637214": {
        "city": "Koottapalli",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "638182": {
        "city": "Velur Bazaar sl",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637017": {
        "city": "Tholur",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637406": {
        "city": "Vellakkalpatti",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637015": {
        "city": "Sevetturanganpatti",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "636301": {
        "city": "Thottivalasu",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637019": {
        "city": "Talambadi",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "636202": {
        "city": "Veppilaipatti",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637402": {
        "city": "Kalkurichi",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637412": {
        "city": "Singalandapuram",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637003": {
        "city": "Vallipuram",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637001": {
        "city": "Vasanthapuram",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637405": {
        "city": "Visanam",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637209": {
        "city": "Thokkavadi",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637201": {
        "city": "Uppupalayam",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637018": {
        "city": "Veppanpattibudur",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637021": {
        "city": "Varagur",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637205": {
        "city": "Vattur",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637204": {
        "city": "Thidumal",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637213": {
        "city": "Vadakaraiatur",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637408": {
        "city": "Rasipuram East",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637014": {
        "city": "Thathaiyangarpatti",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637404": {
        "city": "Valavanthikombai",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "638183": {
        "city": "Valayakaranur",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637203": {
        "city": "Sullipalayam",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637410": {
        "city": "Marapparai",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637207": {
        "city": "Villipalayam",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637208": {
        "city": "Vengarai",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "637206": {
        "city": "Sungakaranpatti",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "636407": {
        "city": "Pudupatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636142": {
        "city": "Unanthangal",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "636118": {
        "city": "Ulipuram",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637303": {
        "city": "Veerachipalayam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "638006": {
        "city": "Pallipalayam",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "636113": {
        "city": "Vazhakombai",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "638181": {
        "city": "Veeranampalayam",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "621215": {
        "city": "Yelurpatti",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "637211": {
        "city": "Tiruchengodu West",
        "state": "Tamil Nadu",
        "district": "Namakkal"
    },
    "643102": {
        "city": "Vannarpet",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643240": {
        "city": "Pattavayal",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643206": {
        "city": "Thoraihatty",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643216": {
        "city": "Kil Kotagiri",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643221": {
        "city": "Melur Nilgiris",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643201": {
        "city": "Aravenu",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643202": {
        "city": "Jegathala",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643203": {
        "city": "Balacola",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643241": {
        "city": "Uppatti",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643212": {
        "city": "Sree Madurai",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643209": {
        "city": "Mulligoor",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643224": {
        "city": "T R bazaar",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643204": {
        "city": "Chamraj Estate",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643231": {
        "city": "Wellington",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643214": {
        "city": "T.Manihatty",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643001": {
        "city": "Udagamandalam Race course",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643205": {
        "city": "Kayyunni",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643220": {
        "city": "Mangorange",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643211": {
        "city": "Thorapalli",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643101": {
        "city": "Coonoor",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643270": {
        "city": "Devala",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643207": {
        "city": "Mayfield",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643007": {
        "city": "Hullathi",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643002": {
        "city": "Thuneri",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643219": {
        "city": "Pegumbahalla Camp",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643217": {
        "city": "Nihung",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643005": {
        "city": "Thalakundah",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643004": {
        "city": "Parsons Valley",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643006": {
        "city": "Finger Post",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643237": {
        "city": "Sandynallah",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643226": {
        "city": "Newhope",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643104": {
        "city": "Yedappalli",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643234": {
        "city": "Hulical",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643225": {
        "city": "Rockwood Estate",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643213": {
        "city": "Koderi",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643215": {
        "city": "Shanthur",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643271": {
        "city": "Kil Kotagiri bazaar",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643253": {
        "city": "Kolapalli",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643239": {
        "city": "Munnanad",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643236": {
        "city": "Kotada Estate",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643218": {
        "city": "Thuthurmattam",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643242": {
        "city": "Tuttapallam",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643003": {
        "city": "Welbeck Estate",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643223": {
        "city": "Singara",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643238": {
        "city": "Pilloormattam",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643105": {
        "city": "Ottupattarai",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643233": {
        "city": "Pandalur",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643103": {
        "city": "Pasteur Institute",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643228": {
        "city": "Yellamalai",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643230": {
        "city": "Thiashoa",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643232": {
        "city": "Wellington Bazaar",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643282": {
        "city": "Yedakadu",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "643243": {
        "city": "Yellanhalli",
        "state": "Tamil Nadu",
        "district": "Nilgiris"
    },
    "621103": {
        "city": "Vengalam",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621118": {
        "city": "Viralipattipudur",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621708": {
        "city": "Varagur",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621108": {
        "city": "Vadakkalur",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621107": {
        "city": "Tirupayar",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621109": {
        "city": "Therani",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621101": {
        "city": "Puduattur",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621717": {
        "city": "Veppur",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621102": {
        "city": "Viswagudi",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621219": {
        "city": "Yesanai",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621212": {
        "city": "Pudunaduvalur",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621115": {
        "city": "Valikondapuram",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621113": {
        "city": "Varagupadi",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621104": {
        "city": "Velur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621133": {
        "city": "Sirumathur",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621106": {
        "city": "Sathanur",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621110": {
        "city": "Veppadi",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "621716": {
        "city": "Vayalur",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621117": {
        "city": "V.Kalathur",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621114": {
        "city": "Tenur",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621116": {
        "city": "Veppanthattai",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621121": {
        "city": "Ladapuram",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621126": {
        "city": "Naranamangalam",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "621220": {
        "city": "Thoramangalam",
        "state": "Tamil Nadu",
        "district": "Perambalur"
    },
    "622302": {
        "city": "Tirumananjeri",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "614629": {
        "city": "Thiyathur",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622203": {
        "city": "Vathanakottai",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622003": {
        "city": "Vanniampatti",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "613301": {
        "city": "Vembanpatti",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622301": {
        "city": "Tuvar",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622401": {
        "city": "Thenur",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "614618": {
        "city": "Vilanur",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "614616": {
        "city": "Veeramangalam",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "614805": {
        "city": "Subramaniapuram",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622005": {
        "city": "Pudukkottai Collectrate",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622504": {
        "city": "Vilapatti",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "614617": {
        "city": "Vichchur",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622304": {
        "city": "Vanakkankadu",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622101": {
        "city": "Vilathupatti",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622402": {
        "city": "Sundaram",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "614621": {
        "city": "Talanur",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "614801": {
        "city": "Vallavari",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "614622": {
        "city": "Thanthani",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622201": {
        "city": "Vennavalkudi",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622506": {
        "city": "Thekkattur",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "614902": {
        "city": "Vettikadu",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "622503": {
        "city": "P.Alagapuri",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "614630": {
        "city": "Vettanur",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "614624": {
        "city": "Tirunalur",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622515": {
        "city": "Thondamanallur",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "614619": {
        "city": "Kottaipattinam",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622001": {
        "city": "Santhanathapuram",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622501": {
        "city": "Vellanur",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "614620": {
        "city": "Vellore",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622102": {
        "city": "Vembanur",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "621316": {
        "city": "Viralur",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622412": {
        "city": "Virachilai",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622505": {
        "city": "Ramachandrapuram",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622002": {
        "city": "Tirugokarnam",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622204": {
        "city": "Yembal",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622303": {
        "city": "Venkatakulam",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622502": {
        "city": "Tiruppur",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622209": {
        "city": "Vambarampatti",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622409": {
        "city": "Rangiem",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622411": {
        "city": "Valayapatti",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622202": {
        "city": "Valaramanickam",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622404": {
        "city": "Rarapuram",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622104": {
        "city": "Vayalogam",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622507": {
        "city": "Tirumayam",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622403": {
        "city": "Varpattu",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "621305": {
        "city": "Thottiapatti",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "622103": {
        "city": "Veerapatti",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622004": {
        "city": "Vadavalam",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622422": {
        "city": "Sivapuram",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "621308": {
        "city": "Valanadu",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "622406": {
        "city": "Panayapaatti",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622407": {
        "city": "Vegupatti",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "622408": {
        "city": "Pudupatti",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "621312": {
        "city": "Thiagesaralai",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "622419": {
        "city": "Venthan Patti",
        "state": "Tamil Nadu",
        "district": "Pudukkottai"
    },
    "623601": {
        "city": "Seyyamangalam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623502": {
        "city": "Vairavanendal",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623521": {
        "city": "Pamban",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623705": {
        "city": "Vallam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623512": {
        "city": "Athankarai",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623712": {
        "city": "Ulaiyur",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623401": {
        "city": "Valanai",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623308": {
        "city": "Sirumalaikottai",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623407": {
        "city": "Tiruvetriyur",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623703": {
        "city": "T.Mariyur",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623527": {
        "city": "Valasai",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623707": {
        "city": "Vilathur",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623529": {
        "city": "Thangachimadam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623525": {
        "city": "Vettukulam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623538": {
        "city": "Saveriyarpattinam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623539": {
        "city": "Athiyuhtu",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623503": {
        "city": "Ramanathapuram Collectorate",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623402": {
        "city": "Thoonugudi",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "623513": {
        "city": "Pullangudi",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623704": {
        "city": "Vilangulathur",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623514": {
        "city": "Madavanur",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623807": {
        "city": "Ekkakudi",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623605": {
        "city": "Valayapukulam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623701": {
        "city": "T.Pudukottai",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "623515": {
        "city": "Mayakulam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623566": {
        "city": "Ervadi Dargha",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623115": {
        "city": "Uchinatham",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623518": {
        "city": "Thonithurai",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623516": {
        "city": "Pirappanvalasai",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623711": {
        "city": "Vallakulam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623533": {
        "city": "Uthirakosamangai",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623523": {
        "city": "Vannangundu",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623536": {
        "city": "Vani",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623719": {
        "city": "Kamudakudi",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623603": {
        "city": "Ramasamypatti",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623517": {
        "city": "Nathamkulapatham",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623135": {
        "city": "Sevalpatti",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623403": {
        "city": "Pudupattinam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623504": {
        "city": "Velipattanam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623530": {
        "city": "Toruvalur",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623528": {
        "city": "Valinokkam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623608": {
        "city": "Thaduthalankottai",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623706": {
        "city": "Sathanur (pmk)",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623531": {
        "city": "Tirupalaikudi",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623604": {
        "city": "Pasumpon",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623409": {
        "city": "Vattanam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623120": {
        "city": "T.Veppankulam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623532": {
        "city": "Thiruppullani",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623519": {
        "city": "Sundaramudaiyan",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623808": {
        "city": "Mangundu",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623520": {
        "city": "Marine Fisheries",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623406": {
        "city": "Sundarapandiapattinam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623534": {
        "city": "Uchipuli",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623404": {
        "city": "Pandugudi",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623537": {
        "city": "Sholandur",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623315": {
        "city": "Vellayapuram",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623526": {
        "city": "Rameswaram Road",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623309": {
        "city": "Oriyur",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623522": {
        "city": "Panaikulam",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623708": {
        "city": "Senkottaipatti",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623524": {
        "city": "Vellariodai",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623801": {
        "city": "Puduvalasai",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623501": {
        "city": "Ramnanathapuram Public offices",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623802": {
        "city": "Regunathapuram",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623544": {
        "city": "Rettaiyurani",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623806": {
        "city": "Sathaksalai",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "623804": {
        "city": "Vedalai",
        "state": "Tamil Nadu",
        "district": "Ramanathapuram"
    },
    "636117": {
        "city": "Yethapur",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636106": {
        "city": "S.N.mangalam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637103": {
        "city": "Vellaiyampalayam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636122": {
        "city": "Veeranam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636501": {
        "city": "Surapalli",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636204": {
        "city": "Tippampatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637301": {
        "city": "Vadugapatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636308": {
        "city": "Veerapandi",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637101": {
        "city": "Vellarivalli",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636004": {
        "city": "Meyyanur",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636016": {
        "city": "Fairlands",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636003": {
        "city": "Puthumariamman Koil",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636503": {
        "city": "Tholasampatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636451": {
        "city": "Vellar",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636141": {
        "city": "Pungavadi",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636105": {
        "city": "Odiyathur",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636404": {
        "city": "Karuppureddiyur",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636307": {
        "city": "Thirumalagiri",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636002": {
        "city": "Shevapet Bazaar",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636139": {
        "city": "Velampatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636108": {
        "city": "Thandavarayapuram",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636101": {
        "city": "Veppampoondi",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636107": {
        "city": "Seeliampatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636009": {
        "city": "Swaminathapuram",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636119": {
        "city": "Veeragoundanur",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636502": {
        "city": "Tharamangalam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636602": {
        "city": "Vellakadai",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636115": {
        "city": "West Rajapalayam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637501": {
        "city": "Shenbagamadevi",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636304": {
        "city": "Semmankudal",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636102": {
        "city": "Vinayagapuram",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636103": {
        "city": "Mettupatti Tadanur",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636302": {
        "city": "Mamangam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636008": {
        "city": "Parapatti Mannarpalayam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636104": {
        "city": "Sekkadipatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636351": {
        "city": "V.Kongarapatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636111": {
        "city": "Vellalagundam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636012": {
        "city": "Vellalapatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636303": {
        "city": "Tharkadusundarapuram",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636006": {
        "city": "Sanjeevarayanpettai",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637105": {
        "city": "Vembaneri",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636015": {
        "city": "Sanniyasigundu",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636354": {
        "city": "Ramamurthinagar",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636309": {
        "city": "Sikkanampatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636201": {
        "city": "Seelanaickenpatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636306": {
        "city": "Sinnappampatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636001": {
        "city": "Thillainagar",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636112": {
        "city": "Varagur",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636203": {
        "city": "S.Attayampatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637502": {
        "city": "Teppakuttai",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637102": {
        "city": "Thangayur",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636011": {
        "city": "Saminaickenpatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636453": {
        "city": "Virudasampatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636007": {
        "city": "Salem North",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636116": {
        "city": "Viraganur",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636005": {
        "city": "Suramangalam Railway colony",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637504": {
        "city": "Vembadithalam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636109": {
        "city": "Pethanaickenpalayam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636014": {
        "city": "Tadampatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636454": {
        "city": "Veerakkal",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636140": {
        "city": "Odayapatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636305": {
        "city": "Thumbipadi",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636138": {
        "city": "Thekkampattu",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636013": {
        "city": "Salem Steel plant",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636403": {
        "city": "Raman Nagar",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637302": {
        "city": "Tirumangalam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636121": {
        "city": "Valayamadevi",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637104": {
        "city": "Thevur",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636601": {
        "city": "Yercaud",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636452": {
        "city": "Navapatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636010": {
        "city": "Uthamasolapuram",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636130": {
        "city": "Kondayampalli",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636458": {
        "city": "Nariyanur",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636110": {
        "city": "Tagarapudur",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636030": {
        "city": "Sarkar Kollapatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636455": {
        "city": "Panankattur",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636406": {
        "city": "Mettur Thermal project",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636401": {
        "city": "Metturdam North",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636402": {
        "city": "Thangamapuripattinam",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "637107": {
        "city": "Poolampatti",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636457": {
        "city": "Vanavasi",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "636456": {
        "city": "Salem Camp",
        "state": "Tamil Nadu",
        "district": "Salem"
    },
    "630321": {
        "city": "Vethiyur",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630611": {
        "city": "Valacheri",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630305": {
        "city": "Veppangulam",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630201": {
        "city": "Vanjinipatti",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630107": {
        "city": "Vadagudi",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630004": {
        "city": "Ae.College",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630713": {
        "city": "Viswanoor",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630553": {
        "city": "Namanur",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630003": {
        "city": "Alagappapuram",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630556": {
        "city": "Vittaneri",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630211": {
        "city": "Tirupattur Bus stand",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630307": {
        "city": "Patharakudi",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630301": {
        "city": "Amaravathipudur",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630551": {
        "city": "Thuvaralankanmoi",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630303": {
        "city": "Vengalore",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630566": {
        "city": "Mallakottai",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630202": {
        "city": "Unjanai",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630702": {
        "city": "Uthamanoor",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630561": {
        "city": "Tirumanjolai",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630207": {
        "city": "Pillayarpatti",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630101": {
        "city": "Chockalingampudur",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630205": {
        "city": "Kilasevalpatti",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630210": {
        "city": "Tirukoshtiyur",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630501": {
        "city": "Vaiyapuripatti",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630006": {
        "city": "Cecri Campus",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630102": {
        "city": "Chettinad",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630606": {
        "city": "Seikalathur",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630313": {
        "city": "Sembanur",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630302": {
        "city": "Silambani",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630005": {
        "city": "Devakottai Road",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630309": {
        "city": "Puludipatti",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630602": {
        "city": "Muthanendhal",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630562": {
        "city": "Tamarakki",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630709": {
        "city": "Thayamangalam",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630212": {
        "city": "Viramathi",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630108": {
        "city": "Sithivayal",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630106": {
        "city": "Kottaiyur",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630710": {
        "city": "Vandal",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630555": {
        "city": "Sengulipatti",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630557": {
        "city": "Sholapuram",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630001": {
        "city": "Senjai",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630306": {
        "city": "Visalayankottai",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630559": {
        "city": "Periakottai",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630103": {
        "city": "Nemathanpatti",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630314": {
        "city": "Shanmuganathapuram",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630104": {
        "city": "Kandanurperumalkoil",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630203": {
        "city": "Velangudi",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630204": {
        "city": "P.Karungulam",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630502": {
        "city": "Vengaipatti",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630318": {
        "city": "Kannangudi",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630610": {
        "city": "Vellikurichi",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630002": {
        "city": "Sekkalai",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630609": {
        "city": "Saveriarpattinam",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630410": {
        "city": "Varappur",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630408": {
        "city": "Vilangattur",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630552": {
        "city": "Tirumalaikoneripatti",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630312": {
        "city": "Thidakottai",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630405": {
        "city": "Uruvatti",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630206": {
        "city": "Kunnakudi",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630105": {
        "city": "Lakshmipuram",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630554": {
        "city": "Velarendal",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630505": {
        "city": "Muraiyur",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630558": {
        "city": "Paganeri",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630208": {
        "city": "Palavangudi",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630310": {
        "city": "Pattamangalam",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630311": {
        "city": "Velayuthapattinam",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630413": {
        "city": "Pulankurichi",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630214": {
        "city": "Siravayal",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630215": {
        "city": "Sirukudalpatti",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "630565": {
        "city": "Vembattur",
        "state": "Tamil Nadu",
        "district": "Sivaganga"
    },
    "613402": {
        "city": "Vendayampatti",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614602": {
        "city": "Soorapallam",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612301": {
        "city": "Tyagasamudram",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614701": {
        "city": "Rajamadam",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612101": {
        "city": "Melaiyur",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614303": {
        "city": "Vembakudi",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613101": {
        "city": "Vellamperambur",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613602": {
        "city": "Vennamangalam",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614614": {
        "city": "Vettuvakottai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614615": {
        "city": "Sandangadu",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614723": {
        "city": "Saravendrarajanpattinam",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613601": {
        "city": "Vannarapettai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614901": {
        "city": "Sendangadu",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614626": {
        "city": "Vellur-ond",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612103": {
        "city": "Umamaheswarapuram",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614623": {
        "city": "Paingal",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612202": {
        "city": "Thandanthottam",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614802": {
        "city": "Virayankottai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614401": {
        "city": "Ukkadai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612105": {
        "city": "Veppathur",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612104": {
        "city": "Tiruvidamarudur",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614903": {
        "city": "Melanammankurichi",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "612401": {
        "city": "Sivapuram",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613003": {
        "city": "Vennar Bank",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612106": {
        "city": "Kadiramangalam",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614019": {
        "city": "Vaduvur Vadapathi",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "613205": {
        "city": "Vediapuram",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613001": {
        "city": "Thanjavur South",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613504": {
        "city": "Suliyakottai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614402": {
        "city": "Tirukoilpathu",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612501": {
        "city": "Nirathanallur",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614906": {
        "city": "Veppankulam",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612503": {
        "city": "Sholapuram",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614613": {
        "city": "Vattagudi",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612107": {
        "city": "Avaniapuram",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614211": {
        "city": "Chakrapalli",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614201": {
        "city": "Ayyampet Bazaar",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612204": {
        "city": "Tirunageswaram",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614904": {
        "city": "Sydambalpuram",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612302": {
        "city": "Tiruvalanjuli",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613403": {
        "city": "Vallampudur",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614803": {
        "city": "Siruvalakadu",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612703": {
        "city": "Teynampadugai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613009": {
        "city": "Thanjavur West",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612702": {
        "city": "Valayapettai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614204": {
        "city": "Pandaravadai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613104": {
        "city": "Valappakudi",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612603": {
        "city": "Simili",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "612303": {
        "city": "Tirupirambiyam",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614202": {
        "city": "Ullikadai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613007": {
        "city": "Voc Nagar",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613204": {
        "city": "Vilangudi",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614302": {
        "city": "Vadakarai Alathur",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614628": {
        "city": "Vengarai East",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614203": {
        "city": "Umbalapadi",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613005": {
        "city": "Tamil University",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613102": {
        "city": "Thogur",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612605": {
        "city": "Tiruchirai",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "613502": {
        "city": "Pundi-tj",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614625": {
        "city": "Thennamanad",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614804": {
        "city": "Sornakadu",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612802": {
        "city": "Vilathur",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "613002": {
        "city": "Sakkarasamandam",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613201": {
        "city": "Uthamanallur",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613202": {
        "city": "Tiruchottuthurai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614704": {
        "city": "Thambikottai",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614015": {
        "city": "Paravakottai",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "613103": {
        "city": "Tiruvalampozhil",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614208": {
        "city": "Nallur",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "612602": {
        "city": "Tirunaraiyur",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612504": {
        "city": "Virakkan",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614301": {
        "city": "Nariyanur",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613105": {
        "city": "Vishnampettai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612001": {
        "city": "Madalampettai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613501": {
        "city": "Raramuthirakottai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613303": {
        "city": "Tirukanurpatti",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612502": {
        "city": "Thathuvancheri",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614612": {
        "city": "Rudrachinthamani",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614206": {
        "city": "Vaiyacheri",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613004": {
        "city": "Thanjavur Medical college",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612402": {
        "city": "Visalur",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613006": {
        "city": "Vilar",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613203": {
        "city": "Vaidyanathanpettai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612002": {
        "city": "Melakaveri",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614210": {
        "city": "Valoothoor",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612804": {
        "city": "Valangaman",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614632": {
        "city": "Okkanadukilaiyur",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614205": {
        "city": "Uthamadhanapuram",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614601": {
        "city": "Pattukottai Bazaar",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614207": {
        "city": "Rajaghiri",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612205": {
        "city": "Sengarangudi Pudur",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613503": {
        "city": "Sri Pushpam college",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612206": {
        "city": "Tepperumanallur",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614905": {
        "city": "Vadaseri",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "613008": {
        "city": "Thanjavur North gate",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614627": {
        "city": "Tirumangalakottai",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "612108": {
        "city": "Tirunilakudi",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614209": {
        "city": "Umayalpuram",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "614631": {
        "city": "Uranipuram",
        "state": "Tamil Nadu",
        "district": "Thanjavur"
    },
    "625602": {
        "city": "Silvarpatti",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625605": {
        "city": "Tamarakulam",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625523": {
        "city": "Saruthupatti",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625531": {
        "city": "Theni East",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625512": {
        "city": "Theppampatti",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625582": {
        "city": "Subburajnagar",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625526": {
        "city": "Royappanpatti",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625515": {
        "city": "Seelayampatti",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625517": {
        "city": "Thekkampatti",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625528": {
        "city": "Sillamarathupatti",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625536": {
        "city": "Thimmarasanayakanur",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625513": {
        "city": "Jeevanagar",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625556": {
        "city": "C.Pudupatti",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625516": {
        "city": "Surulipatti",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625520": {
        "city": "Poomalaikundu",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625604": {
        "city": "Periyakulam East",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625203": {
        "city": "Genguvarpatti",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625534": {
        "city": "Veerapandi",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625518": {
        "city": "Keelagudalur",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625562": {
        "city": "Varadharajnagar",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625533": {
        "city": "Uthamapalayam West",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625519": {
        "city": "Manalar",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625603": {
        "city": "Vadugapatti",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625579": {
        "city": "Varushanadu",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625521": {
        "city": "Narayanathevanpatti",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625547": {
        "city": "Kodangipatti",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625522": {
        "city": "Kombai",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625530": {
        "city": "Thevaram",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625552": {
        "city": "Markeyankottai",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625524": {
        "city": "Pulikuthi",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625540": {
        "city": "Vellaiyammalpuram",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625601": {
        "city": "Vadagarai",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625525": {
        "city": "Suruliyar Lower camp",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625572": {
        "city": "Venkatachalapuram",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "625538": {
        "city": "Venniar Estate",
        "state": "Tamil Nadu",
        "district": "Theni"
    },
    "621201": {
        "city": "A.A. college",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621007": {
        "city": "Puthanampatti",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620102": {
        "city": "Uyyakondanthirumalai",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621014": {
        "city": "Singalandapuram",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621314": {
        "city": "Yagapuram",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620014": {
        "city": "Kamarajapuram (bhel)",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621712": {
        "city": "Thachankurichi",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621310": {
        "city": "Tirunellipatti",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621210": {
        "city": "Pillapalayam",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621209": {
        "city": "Thiruvengimalai",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621005": {
        "city": "Valaiyur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621711": {
        "city": "Vandalaigudalur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621702": {
        "city": "Sengaraiyur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621003": {
        "city": "Viswambalsamudram",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620011": {
        "city": "Melakalkandarkottai",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621306": {
        "city": "Sevalur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620101": {
        "city": "Mutharasanallur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621307": {
        "city": "Vengaikurichi",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620004": {
        "city": "Senthannirpuram",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621208": {
        "city": "Surampatti",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621221": {
        "city": "Amur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "639101": {
        "city": "Mekkudi",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620026": {
        "city": "Annanagar",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621214": {
        "city": "Valasiramani",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621203": {
        "city": "Thirunarayanapuram",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620013": {
        "city": "Vengur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620010": {
        "city": "Sircarpalayam",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620009": {
        "city": "Ramjeenagar",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620015": {
        "city": "Valavandankottai",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621202": {
        "city": "Velur-ayyampalayam",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621001": {
        "city": "Vishalakshi Ammal samudram",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620024": {
        "city": "Bharathidasan University",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620001": {
        "city": "Tiruchirappalli R.s.",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621216": {
        "city": "Thiruvasi",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621207": {
        "city": "Unniyur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621213": {
        "city": "Todaiyur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620008": {
        "city": "Tiruchirappalli Fort",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620012": {
        "city": "Nagamangalam",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621206": {
        "city": "Veeramachampatti",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621112": {
        "city": "Samayapuram",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621302": {
        "city": "Valayapatti (manaparai)",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "639103": {
        "city": "Kulumani",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621008": {
        "city": "Venkatesapuram",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621204": {
        "city": "Vathalai Gudalur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620007": {
        "city": "Tiruchirappalli Airport",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620025": {
        "city": "Suriyur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621303": {
        "city": "Inamkulathur R.s.",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621105": {
        "city": "Tirupattur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620020": {
        "city": "Sundararajanagar",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621205": {
        "city": "Valaiyeduppu",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620021": {
        "city": "K.Sathanur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621652": {
        "city": "Melarasur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621304": {
        "city": "Kallupatti",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621009": {
        "city": "Tiruvellerai",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621706": {
        "city": "Thinniam",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620023": {
        "city": "Khajanagar",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621004": {
        "city": "T.Sathanur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621002": {
        "city": "Vengadathanur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "639115": {
        "city": "Tirupparaithurai",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621132": {
        "city": "Konalai",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620005": {
        "city": "Uthamaseri",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621012": {
        "city": "Vyrichettipalayam",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "607201": {
        "city": "Periyakurukkai",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "621601": {
        "city": "Lalgudi",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621211": {
        "city": "Vellalapatti",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621006": {
        "city": "Tiruthiamalai",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620006": {
        "city": "Srirangam West",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621011": {
        "city": "Venkatachalapuram",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621127": {
        "city": "Natham Balasamudram",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620016": {
        "city": "Ordnance Estate - tr",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621111": {
        "city": "R.Valavanur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621217": {
        "city": "Velakkanatham",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621022": {
        "city": "Okkarai",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621015": {
        "city": "Pachaperumalpatti",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620019": {
        "city": "Pappakurichi Kattur",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621016": {
        "city": "Perumalpalayam",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "639112": {
        "city": "Pudukottai",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620017": {
        "city": "Tennur East",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620002": {
        "city": "Tiruchirappalli Townhall",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620003": {
        "city": "Woriur Bazaar",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621018": {
        "city": "Sobanapuram",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620018": {
        "city": "Thillai Nagar",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "620022": {
        "city": "Thuvakudimalai",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "621010": {
        "city": "Turaiyur Extension",
        "state": "Tamil Nadu",
        "district": "Tiruchirappalli"
    },
    "627113": {
        "city": "Terkukallikulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627151": {
        "city": "Thottakudi",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627117": {
        "city": "Vallioor Perundunilayam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627861": {
        "city": "Virakeralmpudur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627801": {
        "city": "Achanpudur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627413": {
        "city": "Rengasamudram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627808": {
        "city": "Tippanampatti",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627852": {
        "city": "Urmelalagian",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627416": {
        "city": "Vairavikulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627421": {
        "city": "Manimuthar Project",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627652": {
        "city": "Vijaya Achampadu",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627719": {
        "city": "Vellakulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627202": {
        "city": "Vagaikulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627754": {
        "city": "K. alankulam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "627851": {
        "city": "Pudur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627756": {
        "city": "Vadakkupudur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627354": {
        "city": "Paruthipadu",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627412": {
        "city": "Sivasailam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627425": {
        "city": "Vickramasingapuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627401": {
        "city": "Ambasamudram East",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627435": {
        "city": "Ambasamudram Pudukudi",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627651": {
        "city": "Muthumathanmonmozhi",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627654": {
        "city": "Urumankulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627859": {
        "city": "Surandai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627423": {
        "city": "Thuppakudi",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627120": {
        "city": "Anuvijay Township",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627862": {
        "city": "Virasigamani",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627758": {
        "city": "Vellanaikottai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627757": {
        "city": "Vadugapatti",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627760": {
        "city": "Ramanathapuram(vsd)",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627426": {
        "city": "Viravanallur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627105": {
        "city": "Perungudi",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627431": {
        "city": "Avudaiyanur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627418": {
        "city": "Kila Ambur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627814": {
        "city": "Pattakurichi",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627853": {
        "city": "Sivalarkulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "628502": {
        "city": "Vijayapuri",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "627805": {
        "city": "Kottakulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627358": {
        "city": "Tachanallur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627953": {
        "city": "Komarudappapuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "627108": {
        "city": "Unnankulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627751": {
        "city": "Sundaresapuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627351": {
        "city": "Naduvakrichi",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627414": {
        "city": "Thiruviruthanpulli",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627111": {
        "city": "Uthayathur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627855": {
        "city": "Punniahpuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "627765": {
        "city": "Chockammpatti",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627951": {
        "city": "Northachampatti",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627802": {
        "city": "Kasimajorpuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627101": {
        "city": "Thulukkarpatti",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627502": {
        "city": "Padmaneri",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627809": {
        "city": "Sengottai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627102": {
        "city": "Vadukatchimadil",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627112": {
        "city": "Seelathikulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627110": {
        "city": "Parappadi",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627803": {
        "city": "Kuthukalvalasai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627106": {
        "city": "Perumanal",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627103": {
        "city": "Tiruvengadanathapuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627201": {
        "city": "Therkupatti",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627008": {
        "city": "Gandhinagar",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627352": {
        "city": "Veppankulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627761": {
        "city": "Sangupuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627451": {
        "city": "Gopalasamudram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627424": {
        "city": "Ravanasamudram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627857": {
        "city": "Vellalankulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627821": {
        "city": "Idaikal",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627804": {
        "city": "Nainaragaram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627104": {
        "city": "Vijayapathi",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627713": {
        "city": "Sippiparai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627010": {
        "city": "Vaduganpatti",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627114": {
        "city": "Terkukarungulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627007": {
        "city": "Perumalpuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627602": {
        "city": "Tulukkapatti",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627415": {
        "city": "Vengadampatti",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627001": {
        "city": "Viraraghavapuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627501": {
        "city": "Singampathu",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627109": {
        "city": "Sriregunathapuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627657": {
        "city": "Tisayanvillai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627724": {
        "city": "Kalingapatti",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627127": {
        "city": "Kuttapuli",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627659": {
        "city": "Karaichuthupudur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627417": {
        "city": "Kuniyur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627357": {
        "city": "Tenkulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627152": {
        "city": "Thidiyur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627807": {
        "city": "Panpuli",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "628552": {
        "city": "Venkatesawarapuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "627753": {
        "city": "Subbulapuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627453": {
        "city": "Pattamadai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627813": {
        "city": "Puliyara",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627356": {
        "city": "Taruvai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627860": {
        "city": "Uthumalai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627854": {
        "city": "Nettur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627806": {
        "city": "Vellakal",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627353": {
        "city": "Timmarajapuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627427": {
        "city": "Oothu",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627107": {
        "city": "Salainainarpallivasal",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627011": {
        "city": "V.M.chatram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627759": {
        "city": "Krishnapuram (tvl)",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627002": {
        "city": "Santhinagar",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627355": {
        "city": "Tirumalapuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627006": {
        "city": "Tirunelveli Town",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627133": {
        "city": "Mahendragiri",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627755": {
        "city": "Veeriruppu",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627420": {
        "city": "Manjolai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627012": {
        "city": "Seethaparpanallur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627818": {
        "city": "Melagaram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627005": {
        "city": "Melapalayam Bazaar(tirunelveli",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627452": {
        "city": "Melaseval",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627436": {
        "city": "Mettur",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627601": {
        "city": "Singamparai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627115": {
        "city": "Tirukurungudi",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627604": {
        "city": "Suttamally",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627121": {
        "city": "Palavoor",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627956": {
        "city": "Panavadalichatram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627422": {
        "city": "Papanasam Mills",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627551": {
        "city": "Servalar Camp",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627810": {
        "city": "Thenpothai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627856": {
        "city": "Sambavarvadakarai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627359": {
        "city": "Rajavallipuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627129": {
        "city": "Ramakrishnapuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627051": {
        "city": "Reddiarpatti",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627764": {
        "city": "Royagiri",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627118": {
        "city": "Vijayanarayanam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627124": {
        "city": "Settikulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627361": {
        "city": "Sivalaperi",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627858": {
        "city": "Sundapandiapuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627811": {
        "city": "Tenkasi Rs",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627770": {
        "city": "Tenmalai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627773": {
        "city": "Thalaivankottai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627009": {
        "city": "Tirunelveli Collectorate",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627004": {
        "city": "Tirunelveli Pettai east",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627130": {
        "city": "Tiruvembalapuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627658": {
        "city": "Uvari",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627116": {
        "city": "Vadakangulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627812": {
        "city": "Vavanagaram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627603": {
        "city": "Vadakku Ariyanayagipuram petta",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627131": {
        "city": "Vadakku Veppilangulam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627817": {
        "city": "Vallam",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627003": {
        "city": "Vannarpettai",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627954": {
        "city": "Vannikonendal",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "626140": {
        "city": "Sevalpatti",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "627867": {
        "city": "Venkateswarapuram",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627119": {
        "city": "Vijayanarayanam Naval base",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "627763": {
        "city": "Viswanathaperi",
        "state": "Tamil Nadu",
        "district": "Tirunelveli"
    },
    "631303": {
        "city": "Veeranathur",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631209": {
        "city": "Velanjeri",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "601204": {
        "city": "Reddipalayam",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600052": {
        "city": "Vilangadupakkam",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631213": {
        "city": "Ponpadi Rs",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600067": {
        "city": "Sholavaram",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "602023": {
        "city": "Vellathukottai",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600087": {
        "city": "Valasaravakkam",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600053": {
        "city": "Vijayalakshmipuram",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600058": {
        "city": "Ambattur Indl estate",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631301": {
        "city": "Thyagapuram",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600103": {
        "city": "Vichoor",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "601203": {
        "city": "Voyalur",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "601201": {
        "city": "Tervali",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "602025": {
        "city": "Tirur Cpt",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631204": {
        "city": "Ramapuram",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600072": {
        "city": "Voyalanallur",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "601101": {
        "city": "Rallapadi",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631201": {
        "city": "Nemili",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631202": {
        "city": "Nochili",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631210": {
        "city": "Vyasapuram",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "601102": {
        "city": "Vadamadurai",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600054": {
        "city": "Tank Factory avadi",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600055": {
        "city": "Pandeeswaram",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600095": {
        "city": "Vanagaram",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600077": {
        "city": "Thiruverkadu",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631205": {
        "city": "Veerakaverirajapuram",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631208": {
        "city": "T.T.kandigai",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631206": {
        "city": "Ramasamudram",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600065": {
        "city": "Crp Camp",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631302": {
        "city": "Veeramangalam",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "601206": {
        "city": "Puvalambedu",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "601103": {
        "city": "Vengal",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631207": {
        "city": "Venkatarajakuppam",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631203": {
        "city": "Vidaiyur",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631304": {
        "city": "Vanganur",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600057": {
        "city": "Ernavur",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "602026": {
        "city": "Uttukottai",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "602021": {
        "city": "Thalakancheri",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "602002": {
        "city": "Sengadu",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600050": {
        "city": "Padi South",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600066": {
        "city": "Pozhal",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "602003": {
        "city": "Kakalur Ind estate",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600019": {
        "city": "Wimco Nagar",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600071": {
        "city": "Paruthipattu",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "601202": {
        "city": "Thervoy",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "602024": {
        "city": "Veppambattu",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631211": {
        "city": "Saraswathinagar",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "601205": {
        "city": "Thirupalavanam",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600049": {
        "city": "Villivakkam North",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600080": {
        "city": "Korattur West",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600076": {
        "city": "Korattur Rs",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600062": {
        "city": "Vellanur",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "602107": {
        "city": "Vellavedu",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600099": {
        "city": "Lakshmipuram",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600060": {
        "city": "Vadaperumbakkam",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600051": {
        "city": "Madhavaram Milk colony",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "602103": {
        "city": "Sembarambakkam",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600068": {
        "city": "Manali",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600037": {
        "city": "Mogappair West",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "631212": {
        "city": "Thalavedu",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600120": {
        "city": "Vallur",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "602001": {
        "city": "Tiruvallur Nethaji road",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "602022": {
        "city": "Pennaluripeta",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600110": {
        "city": "Ponniammanmedu",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600109": {
        "city": "Railway Carshed complex",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "600098": {
        "city": "Sidco Estate",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "602027": {
        "city": "Velliyur",
        "state": "Tamil Nadu",
        "district": "Tiruvallur"
    },
    "606905": {
        "city": "Vellur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606604": {
        "city": "Vengikkal",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606901": {
        "city": "Viralur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "632317": {
        "city": "Velleri",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604403": {
        "city": "Velliambakkam",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "632314": {
        "city": "Vettiyantholuvam",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "631701": {
        "city": "Ukkal",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604408": {
        "city": "Vengaram",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606904": {
        "city": "Vilapakkam",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606753": {
        "city": "Velayampakkam",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604503": {
        "city": "Ragunathasamudram",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "632315": {
        "city": "Vazhiyur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604405": {
        "city": "Vazhur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604401": {
        "city": "Purisai",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606804": {
        "city": "Tandarai",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606703": {
        "city": "Puliyampatti",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604504": {
        "city": "Tirumani",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606806": {
        "city": "Veraiyur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606807": {
        "city": "Veeppambattu",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "631702": {
        "city": "Vadakalpakkm",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606709": {
        "city": "Thukkapettai",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "632326": {
        "city": "Thatchur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "632301": {
        "city": "Saidapettai Arni",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606752": {
        "city": "Vedanthavadi",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604407": {
        "city": "Irungur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "606803": {
        "city": "Vasur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606708": {
        "city": "Tiruvadathanur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "635703": {
        "city": "Veerappanur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606902": {
        "city": "Thumbur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606907": {
        "city": "Vadamadimangalam",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606755": {
        "city": "Sanipundi",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604505": {
        "city": "Vallam Arni",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606603": {
        "city": "Thenmathur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606601": {
        "city": "Tiruvannamalai Rs",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604402": {
        "city": "Vadamanapakkam",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606908": {
        "city": "Thenmahadevamangalam",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "632511": {
        "city": "Sakkaramallur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "606702": {
        "city": "Vadamathur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606701": {
        "city": "Valayampattu",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606801": {
        "city": "Ulagampattu",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "632316": {
        "city": "Vinnamangalamarni",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604410": {
        "city": "Vengalathur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604501": {
        "city": "Vedal",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606802": {
        "city": "Veluganandal",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604404": {
        "city": "Tirumpundi",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606707": {
        "city": "Thenmudiyanur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606906": {
        "city": "Vilvarani",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604406": {
        "city": "Vayalamoor",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604502": {
        "city": "Melachery",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606704": {
        "city": "Vasudevampattu",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604601": {
        "city": "Valudalangunam",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "632313": {
        "city": "Tellur",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606903": {
        "city": "Punganbadi",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "632311": {
        "city": "Vallam Kannamangalam",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606751": {
        "city": "Thenpallipattu",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606805": {
        "city": "Turinjapuram",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606710": {
        "city": "Pudupattu",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606754": {
        "city": "Vettavalam",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606611": {
        "city": "Vedanatham",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "606705": {
        "city": "Veeranandal",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "632312": {
        "city": "Nanjukondapuram",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "606706": {
        "city": "Veppurchekkadi",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "604409": {
        "city": "Valkadai",
        "state": "Tamil Nadu",
        "district": "Tiruvannamalai"
    },
    "605702": {
        "city": "Vadaponparappi",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "632512": {
        "city": "Timiri",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632518": {
        "city": "Vembi",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632507": {
        "city": "Venkatapuram",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "613705": {
        "city": "Sellur",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610105": {
        "city": "Vadagudi",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614103": {
        "city": "Segarai",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614403": {
        "city": "Munnavalkottai",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614717": {
        "city": "Vattar",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "612601": {
        "city": "Vellakulam",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "612801": {
        "city": "Sathanur-psm",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614018": {
        "city": "Ullikottai",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610211": {
        "city": "Alathambadi",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "609405": {
        "city": "Tirumeichur",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "613701": {
        "city": "Vilamal",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614404": {
        "city": "Perambur",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614702": {
        "city": "Kulamanickam",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614016": {
        "city": "Talayamangalam(mng)",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610103": {
        "city": "Tiruneipair",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "612701": {
        "city": "Oothucadu",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610114": {
        "city": "Budamangalam",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610001": {
        "city": "Tiruvarur North",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "612803": {
        "city": "Rayapuram",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614715": {
        "city": "Vittukatti",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610051": {
        "city": "Elavangargudi",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614017": {
        "city": "Vallur",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610102": {
        "city": "Velukudi",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614001": {
        "city": "Vanakkara Street",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "612704": {
        "city": "Govindakudi",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "613703": {
        "city": "Vennavasal",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610206": {
        "city": "Vadapathimangalam",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614013": {
        "city": "Pullavarayankudikadu",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614703": {
        "city": "Veppancheri",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614708": {
        "city": "Sendamangalam(ttp)",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614738": {
        "city": "Jambavanodai",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "613704": {
        "city": "Kulikarai",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "612604": {
        "city": "Vadaver",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610113": {
        "city": "Kankoduthavanitham",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614705": {
        "city": "Sithamalli",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610104": {
        "city": "Tirukannamangai",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610205": {
        "city": "Tirunellikaval",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610003": {
        "city": "Kidarankondan",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610109": {
        "city": "Pulivalam",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "612610": {
        "city": "Pudukudi",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "609608": {
        "city": "Ubayavedanthapuram",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610202": {
        "city": "Tirunattiyathankudi",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614101": {
        "city": "Tanneerkunnam",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614102": {
        "city": "Vadakovanur",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614706": {
        "city": "Udayamarthandapuram",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614710": {
        "city": "Tirukalar",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614014": {
        "city": "Serumangalam",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "609502": {
        "city": "Mudikondan",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614020": {
        "city": "Tenparai",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610107": {
        "city": "Vikrapandiyam",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614719": {
        "city": "Palaiyur",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "610110": {
        "city": "Srivanjiam",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "609603": {
        "city": "Velangudi",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614028": {
        "city": "Tirupalakudi",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "614713": {
        "city": "Tiruturaipundi R.s.",
        "state": "Tamil Nadu",
        "district": "Tiruvarur"
    },
    "628718": {
        "city": "Sillankulam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628617": {
        "city": "Vellamadam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628712": {
        "city": "Sakkammalpuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628152": {
        "city": "Pazhaiyalkayal",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628714": {
        "city": "Vadakkuvandanam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628401": {
        "city": "Vellaram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628302": {
        "city": "Savalaperi",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628703": {
        "city": "Uyarathukudiyiruppu",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628002": {
        "city": "Victoria Extension road",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628503": {
        "city": "Padanthapuli 2",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628704": {
        "city": "Vijayaramapuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628221": {
        "city": "Alanthalai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628619": {
        "city": "Padmanabamangalam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628612": {
        "city": "Tirukkalur",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628215": {
        "city": "Tiruchendur Devasthanam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628701": {
        "city": "Theripanai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628201": {
        "city": "Sonaganvilai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628210": {
        "city": "Solaikudiyiruppu",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628809": {
        "city": "Vittilapuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628702": {
        "city": "Thoppuvalam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628851": {
        "city": "Vadakkukariseri",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628625": {
        "city": "Arampannai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628901": {
        "city": "Tattaneri",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628802": {
        "city": "Vallavallan",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628202": {
        "city": "Rajamaniapuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628613": {
        "city": "Therkankulam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628621": {
        "city": "Velur",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628952": {
        "city": "Vellalankottai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628005": {
        "city": "Muthiahpuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628904": {
        "city": "Vowalthothi",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628151": {
        "city": "Therku Autoor",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628907": {
        "city": "Vilathikulam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628911": {
        "city": "Vembur",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628003": {
        "city": "New Colony",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628614": {
        "city": "Kadayanodaiai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628622": {
        "city": "Vallakulam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628008": {
        "city": "Puthukudi 3rd mile",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628902": {
        "city": "Thalaikattupuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628104": {
        "city": "Sekkarakudi",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628001": {
        "city": "Vetrivelpuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628301": {
        "city": "Umarikottai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628007": {
        "city": "Heavy Water project colony",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628656": {
        "city": "Thatchanvilai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628716": {
        "city": "Villiseri",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628211": {
        "city": "Nalumavadi",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628723": {
        "city": "Ilavelangal",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628720": {
        "city": "Turaiyur",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628251": {
        "city": "Valasakaran Vilai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628402": {
        "city": "Swaminatham",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628218": {
        "city": "Vallivilai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628724": {
        "city": "Kadalai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628721": {
        "city": "Zamindevarkulam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628203": {
        "city": "Vedakottaivilai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628253": {
        "city": "Kaliyavoor",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628206": {
        "city": "Vadakkur(ksm)",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628615": {
        "city": "Karungulam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "626205": {
        "city": "Uppathur",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "628618": {
        "city": "Pattakarai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628204": {
        "city": "Kayalpatnam Bazaar",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628205": {
        "city": "Subramaniapuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628304": {
        "city": "Tattaparai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628908": {
        "city": "Sholpuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628903": {
        "city": "Veppalodai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628653": {
        "city": "Tattarmadam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628624": {
        "city": "Kongarayankurichi",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628103": {
        "city": "Therkusilukkanpatti",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628101": {
        "city": "Periyanayagipuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628501": {
        "city": "Kovilpatti Town",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628623": {
        "city": "Thenthiruperai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628722": {
        "city": "Vedanatham",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628207": {
        "city": "Varandiavel",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628213": {
        "city": "Seerudaiyarpuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628208": {
        "city": "Seerkatchi",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628209": {
        "city": "Manapad",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "626202": {
        "city": "Nenmeni",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "628102": {
        "city": "Varthagareddipatti",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628616": {
        "city": "Oyyangudi",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628252": {
        "city": "Vasavappapuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628751": {
        "city": "Pannaivilai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628212": {
        "city": "Viramanickam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628620": {
        "city": "Srimoolakarai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628717": {
        "city": "Parivillikottai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628906": {
        "city": "Vembar",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628705": {
        "city": "Periyathalai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628752": {
        "city": "Perungulam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628223": {
        "city": "Peyanvilai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628219": {
        "city": "Vellalanvilai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628655": {
        "city": "Puchikadu",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628214": {
        "city": "Puraiyur",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628229": {
        "city": "Sahupuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628753": {
        "city": "Sivagalai",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628726": {
        "city": "Sivagnanapuram",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628601": {
        "city": "Srivaikuntam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628004": {
        "city": "Tt. thermal power plant",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628105": {
        "city": "Taruvaikulam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628228": {
        "city": "Therikudiyiruppu",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628006": {
        "city": "Thermal Nagagr",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "628216": {
        "city": "Virapandianpatanam",
        "state": "Tamil Nadu",
        "district": "Tuticorin Thoothukudi"
    },
    "632011": {
        "city": "Thuthipattu",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632010": {
        "city": "Melmonavur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635651": {
        "city": "Veppalnatham",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635602": {
        "city": "Tirupattur Fort",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635804": {
        "city": "Valayalkarapatti",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635653": {
        "city": "Vengalapuram",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632510": {
        "city": "Paravathur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635701": {
        "city": "Vasanthapuram",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635814": {
        "city": "Shanankuppam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632508": {
        "city": "Thuraiperumbakkam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635801": {
        "city": "Vadakkupattu",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632101": {
        "city": "Velangadu",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635802": {
        "city": "Thennambattu",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632102": {
        "city": "Palaparambattu",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "631002": {
        "city": "Sirunamalli",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632501": {
        "city": "Velam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632519": {
        "city": "Vellore Sugar mills",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632009": {
        "city": "Sathuvachari",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "631003": {
        "city": "Valaikulam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632513": {
        "city": "Walajapet Bazaar",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635806": {
        "city": "Rajakuppam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635702": {
        "city": "Thagarakuppam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632204": {
        "city": "Vaduganthangal",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632202": {
        "city": "Tirumani",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632502": {
        "city": "Melkalathur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "631001": {
        "city": "Rajajinagar",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635811": {
        "city": "Venkatasamudram",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632517": {
        "city": "Ratnagiri Kilminnal",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635810": {
        "city": "Thottithuraimottur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632503": {
        "city": "Thoppukhana",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "631151": {
        "city": "Uriyur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632107": {
        "city": "Veppankuppam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632055": {
        "city": "Ariyur Spinning mills",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632106": {
        "city": "Slr Sanatorium",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632509": {
        "city": "Melvisharam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635601": {
        "city": "Tirupattur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635852": {
        "city": "Vettapattu",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635815": {
        "city": "Kethandapatti Sugar mills",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "631051": {
        "city": "Tirumalpur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632505": {
        "city": "Surai",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632531": {
        "city": "Sirukarumbur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "631102": {
        "city": "Vangupattu",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632002": {
        "city": "Virupakshipuram",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632004": {
        "city": "Vellore Market",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635854": {
        "city": "Velakalnatham",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632406": {
        "city": "Bhel Ranipet",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632602": {
        "city": "Kottamitta",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632014": {
        "city": "Vellore Institute of technolog",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632105": {
        "city": "Ussoor",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635805": {
        "city": "Rajakkal",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632520": {
        "city": "Veppalai",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632209": {
        "city": "Ruhsa Campus",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632506": {
        "city": "Velur- Kalavai",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635751": {
        "city": "Vaniyambadi R.s",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635901": {
        "city": "Thokkiyam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632113": {
        "city": "Veppampattu",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635813": {
        "city": "Valathoor",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635655": {
        "city": "Puliyur Tpt",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632058": {
        "city": "Vandranthangal",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632603": {
        "city": "Viludonpalayam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635853": {
        "city": "Yelagiri Hills",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632504": {
        "city": "Valayathur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632601": {
        "city": "Thattimanapalli",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632405": {
        "city": "Mukundarayapuram",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "631004": {
        "city": "Seyyoor",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632104": {
        "city": "Virnjipuram",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632103": {
        "city": "Vannanthangal",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632006": {
        "city": "Virudhambattu",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635809": {
        "city": "Vettuvanam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635803": {
        "city": "Veppur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632515": {
        "city": "Tiruvalam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "631101": {
        "city": "Nandiveduthangal",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635754": {
        "city": "Vadacheri",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "631006": {
        "city": "Ins Rajali",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "631052": {
        "city": "Ulianallore",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635652": {
        "city": "Vishamangalam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635851": {
        "city": "Vakkanampatti",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632007": {
        "city": "Pallikuppam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632012": {
        "city": "Saidapet",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635654": {
        "city": "Sundarampalli",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632319": {
        "city": "Varagur Pudur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632404": {
        "city": "Vanapadi",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632013": {
        "city": "Konavattam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632001": {
        "city": "Voorhees College",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632514": {
        "city": "Vasur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635812": {
        "city": "Vengili",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632201": {
        "city": "Perumankuppam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635752": {
        "city": "Vellakuttai",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635808": {
        "city": "Oomerabad",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632516": {
        "city": "Vennampalle",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635710": {
        "city": "Poongulam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632318": {
        "city": "Valapandal",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632402": {
        "city": "Navalpur",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632203": {
        "city": "Melmayil",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "635807": {
        "city": "Vinnamangalam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632057": {
        "city": "Munjurpattu",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632114": {
        "city": "Sathyamangalam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632401": {
        "city": "Ranipet East",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632403": {
        "city": "Ranipet Industrial estate",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632521": {
        "city": "Vilapakkam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "632008": {
        "city": "Shenbakkam",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "631152": {
        "city": "Suraksha Cisf campus",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "631005": {
        "city": "Winterpet",
        "state": "Tamil Nadu",
        "district": "Vellore"
    },
    "605402": {
        "city": "Viramur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604301": {
        "city": "Vaidapakkam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606102": {
        "city": "Velur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605758": {
        "city": "Virapandi",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606202": {
        "city": "Vilambar",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604207": {
        "city": "Vellimeudpettai",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604101": {
        "city": "Pankolathur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606115": {
        "city": "Senkurichi",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604302": {
        "city": "Thenkalavoy",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605701": {
        "city": "Vengamur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604151": {
        "city": "Thenpalai",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604303": {
        "city": "Thalangadu",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606201": {
        "city": "Vettiperumalagaram",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606204": {
        "city": "Thenthorasalur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "607209": {
        "city": "T . kolathur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605201": {
        "city": "V.Mathur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605103": {
        "city": "Tirupachanur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604202": {
        "city": "Sevalapuri",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605803": {
        "city": "Vadamarudur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606107": {
        "city": "Vellaiyur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605651": {
        "city": "V.Nallalam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604210": {
        "city": "Thamanur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605202": {
        "city": "Sangeethamangalam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606301": {
        "city": "V mamandur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605752": {
        "city": "Vadakaraithayanur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606207": {
        "city": "Venkatampettai",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606401": {
        "city": "Vengodu",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "607107": {
        "city": "Valayampattu",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605755": {
        "city": "Sennakunam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605801": {
        "city": "Tholuvanthangal",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605102": {
        "city": "Thiruvandarkoil",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605108": {
        "city": "Valavanur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604203": {
        "city": "Viranamur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606402": {
        "city": "Viriyur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605757": {
        "city": "Tiruppalapandal",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606305": {
        "city": "Tiruppeyar",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605203": {
        "city": "Vembi",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605652": {
        "city": "Vikravandi R.s.",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604152": {
        "city": "Velanthangal",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605401": {
        "city": "Valudareddy",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605101": {
        "city": "Auroville",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604201": {
        "city": "Thalangunam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604001": {
        "city": "Ural",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605601": {
        "city": "Thoravi",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606208": {
        "city": "Nedumanur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605751": {
        "city": "Vengur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605502": {
        "city": "Valudavur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604208": {
        "city": "Valathi",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605754": {
        "city": "Sangiyam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605802": {
        "city": "Tiruvarangam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "607202": {
        "city": "Sembiamadevi",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "607203": {
        "city": "Tiruvennainallur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "607204": {
        "city": "Vanampattu",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604204": {
        "city": "Vadapalai",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605111": {
        "city": "Tiruchitambalam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604206": {
        "city": "Vilukkam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605105": {
        "city": "Venkatadri agaram",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605302": {
        "city": "Teli",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605014": {
        "city": "Kaluperumbakkam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605602": {
        "city": "Villupuram West",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605301": {
        "city": "Perumbakkam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604205": {
        "city": "Thiruvathikunnam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604154": {
        "city": "Velur (sa)",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605109": {
        "city": "Vanur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604307": {
        "city": "Saram ( tindivanam )",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605110": {
        "city": "Odiampet",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604102": {
        "city": "Thensiruvalur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605501": {
        "city": "Vakkur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606205": {
        "city": "Sikkadu",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604306": {
        "city": "Thenputhur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606203": {
        "city": "Virugavur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605756": {
        "city": "Vilandai",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606306": {
        "city": "Kugaiyur Gds",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605107": {
        "city": "Thirubuvanai",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "605759": {
        "city": "Tirukkoyilur.Athipakkam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "607207": {
        "city": "Madapattu",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "606206": {
        "city": "Vilakkur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604304": {
        "city": "Veliyanur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604305": {
        "city": "Olakkur",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "604153": {
        "city": "Sokuppam",
        "state": "Tamil Nadu",
        "district": "Villupuram"
    },
    "626203": {
        "city": "Venkatachalapuram",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626141": {
        "city": "T.Managaseri",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626137": {
        "city": "Pillayarkulam",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626129": {
        "city": "Tiruchuli",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626607": {
        "city": "Ulagudi",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626001": {
        "city": "Virudhunagar West",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626130": {
        "city": "Vadamalapuram",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626144": {
        "city": "Alangulam",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626106": {
        "city": "Vairavanangoor",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626101": {
        "city": "Vellayapuram",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626005": {
        "city": "Vellur",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626124": {
        "city": "Vilampatti",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626189": {
        "city": "Viswanatham",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626204": {
        "city": "Thulukkapatti R.s.",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626125": {
        "city": "Srivilliputhur North",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626138": {
        "city": "Villupanur",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626142": {
        "city": "Zaminkollangondan",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626102": {
        "city": "Samsigapuram",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626134": {
        "city": "Vadhuvarpatti",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626121": {
        "city": "Seithur",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626139": {
        "city": "Solapuram",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626145": {
        "city": "Devadanam",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626188": {
        "city": "Dhalavaipuram",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626612": {
        "city": "Viracholan",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626131": {
        "city": "Vijayakarisalkulam",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626201": {
        "city": "Sankarapandiapuram",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626103": {
        "city": "Sengundrapuram",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626136": {
        "city": "Vadakarai",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626149": {
        "city": "Thailapuram",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626177": {
        "city": "Iluppaiyur",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626003": {
        "city": "Virudhunagar Industrial estate",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626114": {
        "city": "Vadakkunatham",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626105": {
        "city": "Kallurani",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626104": {
        "city": "Vakkanangundu",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626133": {
        "city": "Pilavakkaldam",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626107": {
        "city": "Kovilangulam",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626113": {
        "city": "Pandalgudi",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626143": {
        "city": "Krishnapuram",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626053": {
        "city": "Kullursandai",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626108": {
        "city": "Kumarasamy Raja nagar",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626190": {
        "city": "Kunnur South",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626127": {
        "city": "Valayapatti",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626118": {
        "city": "Vedanatham",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626004": {
        "city": "Sennelgudi",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626109": {
        "city": "Melathulukkankulam",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626110": {
        "city": "Mohamed Sahibpuram",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626111": {
        "city": "Puthur",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626119": {
        "city": "V.Muthulingapuram",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626112": {
        "city": "Palayampatti",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626117": {
        "city": "Sammandapuram",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626159": {
        "city": "Ramasamy Nagar",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626126": {
        "city": "Sundarapandiam",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626128": {
        "city": "Vetrilaiyurani",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626116": {
        "city": "W Pudupatti",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626132": {
        "city": "Watrap",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626122": {
        "city": "Settiyarpatti",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626123": {
        "city": "Sivakasi South",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626154": {
        "city": "Vaithilingapuram",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    },
    "626002": {
        "city": "Virudhunagar Collectorate",
        "state": "Tamil Nadu",
        "district": "Virudhunagar"
    }
}';

// Decode JSON data
$data = json_decode($jsonData, true);

// Get the POST body content
$postData = json_decode(file_get_contents("php://input"), true);

if (!$postData) {
    http_response_code(400);
    die(json_encode(["message" => "Invalid input data"]));
}

// Check if pincode is set in the request
if (isset($postData['pincode'])) {
    $pincode = $postData['pincode'];

    // Check if pincode exists in the data
    if (isset($data[$pincode])) {
        $response = [
            "pincode" => $pincode,
            "city" => $data[$pincode]['city'],
            "state" => $data[$pincode]['state'],
            "district" => $data[$pincode]['district']
        ];
    } else {
        // Pincode not found
        http_response_code(404);
        $response = ["message" => "Pincode not found"];
    }
} else {
    // Pincode parameter not provided
    http_response_code(400);
    $response = ["message" => "Pincode parameter is required"];
}

// Return JSON response
echo json_encode($response);
?>
