<?php

namespace App\Http\Controllers\articlescontroller;
use App\Article;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class articlesController extends Controller
{
    public function show($id)
    {

        echo "<table class='table' border='1'>";
        echo ' <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">title</th>
          <th scope="col">description</th>
          <th scope="col">image</th>
          <th scope="col">user_id</th>
        </tr>
      </thead>';
        $articles = Article::find($id);
        dd($articles->user);
        
    
    
        return "<tr> <td>".$articles['id']."</td><td>".$articles['title'].
        "</td><td>".$articles['description']."</td><td>"."<img src=../images/".$articles['avatar'].">".
        "</td><td>".$articles['user_id']."<br>";
       

        echo "</td></tr></table>";
    }
    
}
