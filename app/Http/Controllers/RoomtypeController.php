<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomtypeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return '{"total":200,"per_page":10,"current_page":1,"last_page":20,"next_page_url":"https:\/\/vuetable.ratiw.net\/api\/users?sort=&per_page=10&page=2","prev_page_url":null,"from":1,"to":10,"data":[{"id":1,"name":"Noelia O\'Kon","nickname":"asperiores","email":"otho.smitham@example.com","birthdate":"1978-06-28 00:00:00","gender":"F","salary":"13098.00","group_id":2,"created_at":"2017-01-01 07:21:10","updated_at":"2017-01-01 07:21:10","age":41,"group":{"id":2,"name":"Exec","description":"Executives"},"address":{"id":1,"user_id":1,"line1":"0888 Aniyah Locks\nLake Bridie, NJ 51086","line2":"Cayman Islands","zipcode":"92991-2805","mobile":"1-742-816-9238x848","fax":"(484)438-4697x8638"}},{"id":2,"name":"Mr. Enid Von PhD","nickname":"alias","email":"pollich.cecilia@example.com","birthdate":"1990-09-18 00:00:00","gender":"M","salary":"35978.00","group_id":4,"created_at":"2017-01-01 07:21:10","updated_at":"2017-01-01 07:21:10","age":29,"group":{"id":4,"name":"Sup","description":"Supervisors"},"address":{"id":2,"user_id":2,"line1":"59732 Iva Spur Suite 468\nEast Hortenseton, VA 70087","line2":"Cayman Islands","zipcode":"41967","mobile":"1-913-407-7558x503","fax":"(388)906-8002"}},{"id":3,"name":"Colton Koch","nickname":"id","email":"little.myrna@example.net","birthdate":"1968-10-29 00:00:00","gender":"F","salary":"26278.00","group_id":3,"created_at":"2017-01-01 07:21:10","updated_at":"2017-01-01 07:21:10","age":51,"group":{"id":3,"name":"Mgr","description":"Managers"},"address":{"id":3,"user_id":3,"line1":"539 Conn Locks Suite 801\nTobinfort, IL 37047-5508","line2":"Antigua and Barbuda","zipcode":"51722-4502","mobile":"557.845.1830x844","fax":"1-831-304-7444x73027"}},{"id":4,"name":"Gregory Vandervort","nickname":"vel","email":"dock47@example.org","birthdate":"1989-12-12 00:00:00","gender":"M","salary":"25537.00","group_id":3,"created_at":"2017-01-01 07:21:10","updated_at":"2017-01-01 07:21:10","age":29,"group":{"id":3,"name":"Mgr","description":"Managers"},"address":{"id":4,"user_id":4,"line1":"916 Rosemary Forge\nKreigerton, MT 24207","line2":"Uganda","zipcode":"67639-6707","mobile":"766.431.9121","fax":"(154)336-3674x08451"}},{"id":5,"name":"Miss Rahsaan Heaney IV","nickname":"qui","email":"ugrady@example.org","birthdate":"1995-11-27 00:00:00","gender":"F","salary":"49003.00","group_id":2,"created_at":"2017-01-01 07:21:10","updated_at":"2017-01-01 07:21:10","age":23,"group":{"id":2,"name":"Exec","description":"Executives"},"address":{"id":5,"user_id":5,"line1":"91792 Kertzmann Prairie Apt. 376\nLake Nakiaville, DC 98189","line2":"Jamaica","zipcode":"10101-1450","mobile":"07507519787","fax":"+24(9)5120507985"}},{"id":6,"name":"Ms. Crystel Zemlak IV","nickname":"reiciendis","email":"amari.rau@example.com","birthdate":"1968-09-12 00:00:00","gender":"F","salary":"12383.00","group_id":4,"created_at":"2017-01-01 07:21:10","updated_at":"2017-01-01 07:21:10","age":51,"group":{"id":4,"name":"Sup","description":"Supervisors"},"address":{"id":6,"user_id":6,"line1":"97650 Scot Haven Apt. 160\nCrawfordmouth, ME 39767-7003","line2":"Finland","zipcode":"88917","mobile":"1-851-069-9234x9566","fax":"(048)445-4691x33356"}},{"id":7,"name":"Nona McDermott","nickname":"quaerat","email":"adrien.baumbach@example.org","birthdate":"1985-10-01 00:00:00","gender":"F","salary":"18512.00","group_id":4,"created_at":"2017-01-01 07:21:10","updated_at":"2017-01-01 07:21:10","age":34,"group":{"id":4,"name":"Sup","description":"Supervisors"},"address":{"id":7,"user_id":7,"line1":"4332 Alvina Radial\nPort Darbyville, IA 63357","line2":"Barbados","zipcode":"79679","mobile":"(736)058-1324","fax":"002.234.8466x49816"}},{"id":8,"name":"Miss Genoveva Murazik V","nickname":"rerum","email":"ohettinger@example.net","birthdate":"1988-10-19 00:00:00","gender":"F","salary":"31209.00","group_id":2,"created_at":"2017-01-01 07:21:10","updated_at":"2017-01-01 07:21:10","age":31,"group":{"id":2,"name":"Exec","description":"Executives"},"address":{"id":8,"user_id":8,"line1":"96418 Ritchie Mall Apt. 215\nLake Jessyca, VT 65970-8256","line2":"Netherlands Antilles","zipcode":"94649-6628","mobile":"472.825.7183","fax":"400-507-7463"}},{"id":9,"name":"Beulah Huels","nickname":"non","email":"stefan99@example.com","birthdate":"1963-09-04 00:00:00","gender":"F","salary":"36920.00","group_id":5,"created_at":"2017-01-01 07:21:10","updated_at":"2017-01-01 07:21:10","age":56,"group":{"id":5,"name":"Emp","description":"Employees"},"address":{"id":9,"user_id":9,"line1":"18890 Carroll Lakes Suite 355\nUptonchester, UT 94878-0739","line2":"Hong Kong","zipcode":"91204","mobile":"831.652.0832","fax":"(688)788-8947"}},{"id":10,"name":"Zoe Klein","nickname":"ex","email":"ejacobson@example.org","birthdate":"1990-04-19 00:00:00","gender":"F","salary":"35616.00","group_id":3,"created_at":"2017-01-01 07:21:10","updated_at":"2017-01-01 07:21:10","age":29,"group":{"id":3,"name":"Mgr","description":"Managers"},"address":{"id":10,"user_id":10,"line1":"6721 Nader Summit\nLake Alana, MS 84476","line2":"Reunion","zipcode":"77124-1459","mobile":"1-129-438-6148","fax":"(913)441-3846"}}]}';
    }

}
