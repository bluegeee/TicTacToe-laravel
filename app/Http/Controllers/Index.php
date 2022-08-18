<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\history;
use PhpParser\Node\Expr\FuncCall;

class Index extends Controller
{
    public function index()
    {
        $win_X = DB::select("select COUNT(*) as 'count_win' from history WHERE player = 'X' AND status = 'win'");
        $lost_X = DB::select("select COUNT(*) as 'count_lost' from history WHERE player = 'X' AND status = 'lost'");
        $win_O = DB::select("select COUNT(*) as 'count_win' from history WHERE player = 'O' AND status = 'win'");
        $lost_O = DB::select("select COUNT(*) as 'count_lost' from history WHERE player = 'O' AND status = 'lost'");
        $table_walk = DB::select("select * from history WHERE status IS NOT NULL AND status != 'lost'");
        $table_walk_step = DB::select("select * from history ");
        return view('index', compact('win_X', 'lost_X', 'win_O', 'lost_O', 'table_walk', 'table_walk_step'));
    }

    public function addStep(Request $request)
    {
        $request->validate([
            'player' => 'required',
            'step' => 'required',
            'position' => 'required',
            'date' => 'required',
            'size_table' => 'required'
        ]);


        $TicTacToe = new history();
        $TicTacToe->player = $request->player;
        $TicTacToe->step = $request->step;
        $TicTacToe->position = $request->position;
        $TicTacToe->created_at = $request->date;
        $TicTacToe->updated_at = $request->date;
        $TicTacToe->size_table = $request->size_table;
        $TicTacToe->save();
    }

    public function addStep_finally(Request $request)
    {
        $request->validate([
            'player' => 'required',
            'step' => 'required',
            'status' => 'required',
            'date' => 'required',
            'size_table' => 'required'
        ]);

        $TicTacToe = new history();
        $TicTacToe->player = $request->player;
        $TicTacToe->step = $request->step;
        $TicTacToe->status = $request->status;
        $TicTacToe->size_table = $request->size_table;
        $TicTacToe->created_at = $request->date;
        $TicTacToe->updated_at = $request->date;
        $TicTacToe->save();
    }

    public function addStep_finally_lost(Request $request)
    {
        $request->validate([
            'player' => 'required',
            'step' => 'required',
            'status' => 'required',
            'date' => 'required',
            'size_table' => 'required'
        ]);

        $TicTacToe = new history();
        $TicTacToe->player = $request->player;
        $TicTacToe->step = $request->step;
        $TicTacToe->status = $request->status;
        $TicTacToe->size_table = $request->size_table;
        $TicTacToe->created_at = $request->date;
        $TicTacToe->updated_at = $request->date;
        $TicTacToe->save();
    }

    public function addStep_draw(Request $request)
    {
        $request->validate([
            'step' => 'required',
            'status' => 'required',
            'date' => 'required',
            'size_table' => 'required'
        ]);

        $TicTacToe = new history();
        $TicTacToe->step = $request->step;
        $TicTacToe->status = $request->status;
        $TicTacToe->size_table = $request->size_table;
        $TicTacToe->created_at = $request->date;
        $TicTacToe->updated_at = $request->date;
        $TicTacToe->save();
    }

    public function delete()
    {
        $TicTacToe = new history();
        $TicTacToe->truncate();
    }
}
