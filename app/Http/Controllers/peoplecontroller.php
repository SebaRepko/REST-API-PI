<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class peoplecontroller extends Controller
{
    
    public function index()
    {
        $results = DB::select('SELECT * from people');
        return $results;
    }

    public function show($id)
    {
        $results = DB::select('SELECT * from people WHERE id = ?',array($id));
        return $results;
    }

    public function create()
    {
        $values = array('Imie' => 'Dayle', 'Nazwisko' => 'Kopenhagen', 'Ulica' => 'Słoneczna', 'Miasto' => 'Warszawa', 'Kraj' => 'Polska', 'Nr_telefonu' => 6163162 );
        $results = DB::table('people')-> insert($values);
    }

    public function update($id)
    {
        DB::select('UPDATE people SET Imie = ? WHERE id = ?',array('Jasiu', $id));
    }

    public function destroy($id)
    {
        $results = DB::select('DELETE FROM people WHERE id = ?',array($id));
        return $results;
    }
    
}
