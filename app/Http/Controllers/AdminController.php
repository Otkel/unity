<?php

namespace App\Http\Controllers;

use App\Cup;
use App\Disqualification;
use App\Division;
use App\Game;
use App\Player;
use App\Promotion;
use App\Team;
use App\Tour;
use App\Transfer;
use App\Yellow_card;
use App\Yellow_cards;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function processAddDivision(Request $request){
        $div = new Division();
        $div->name = $request['name'];
        $div->save();
        return redirect()->route('admin');
    }
    public function processAddCup(Request $request){
        $cup = new Cup();
        $cup->name = $request['name'];
        $cup->div_id = $request['category'];
        $cup->save();
        return redirect()->route('admin');
    }
    public function processAddTour(Request $request){
        $tour = new Tour();
        $tour->number = $request['name'];
        $tour->cup_id = $request['category'];
        $tour->save();
        return redirect()->route('admin');
    }
    public function processAddTeam(Request $request){
        $team = new Team();
        $team->name = $request['name'];
        $team->logo = $request['logo'];
        $team->cup_id = $request['category'];
        $team->save();
        return redirect()->route('admin');
    }
    public function processAddPlayer(Request $request){
        $player = new Player();
        $player->name = $request['name'];
        $player->surname = $request['surname'];
        $player->photo = $request['photo'];
        $player->team_id = $request['category'];
        if (isset($request['leftGames'])){
            $disqualification = new Disqualification();
            $disqualification->left_games = $request['leftGames'];
            $disqualification->save();
            $player->disqualification_id = $disqualification['id'];
        }
        $card = new Yellow_card();
        $card->amount_of_cards = $request['cardsNum'];
        $card->save();
        $player->yellow_cards_id = $card['id'];
        $player->save();
        return redirect()->route('admin');
    }
    public function processAddGame(Request $request){
        $game = new Game();
        $game->team1_id = $request['category1'];
        $game->team2_id = $request['category2'];
        $game->tour_id = $request['tour'];
        $game->date = $request['date'];
        $game->status = $request['status'];
        $game->save();
        return redirect()->route('admin');
    }
    public function processMakeTransfer(Request $request){
        $transfer = new Transfer();
        $transfer->team_from = $request['category1'];
        $transfer->team_to = $request['category2'];
        $transfer->player_id = $request['player'];
        $player = Player::find($request['player']);
        $player->team_id = $request['category2'];
        $player->save();
        $transfer->date = $request['date'];
        $transfer->save();
        return redirect()->route('admin');
    }
    public function processMakePromotion(Request $request){
        $promotion = new Promotion();
        $promotion->from_div = $request['category1'];
        $promotion->to_div = $request['category2'];
        $promotion->team_id = $request['team'];
        $team = Team::find($request['team']);
        $cup = Cup::find($team['cup_id']);
        $cup->div_id = $request['category2'];
        $cup->save();
        $promotion->save();
        return redirect()->route('admin');
    }


    public function processEditDivisions($id){
        $div = Division::find($id);
        return view('edit_division',['division'=>$div]);
    }
    public function processEditCups($id){
        $cup = Cup::find($id);
        return view('edit_cup',['cup'=>$cup]);
    }
    public function processEditTours($id){
        $tour = Tour::find($id);
        $cups = Cup::all();
        return view('edit_tour',['tour'=>$tour],['cups'=>$cups]);
    }

    public function processEditTeams($id){
        $team = Team::find($id);
        $cups = Cup::all();
        return view('edit_team',['team'=>$team],['cups'=>$cups]);
    }
    public function processEditPlayers($id){
        $player = Player::find($id);
        $teams = Team::all();
        $cards = Yellow_cards::find($player['yellow_cards_id']);
        return view('edit_player',['teams'=>$teams],['player'=>$player],['cards'=>$cards]);
    }
    public function processEditGames($id){
        $game = Game::find($id);
        $teams = Team::all();
        $tours = Tour::all();
        return view('edit_game',['teams'=>$teams],['game'=>$game]);
    }


    public function processEditDivision(Request $request, $id){
        $div = Division::find($id);
        $div->name = $request['name'];
        $div->save();
        return redirect()->route('admin');
    }
    public function processEditCup(Request $request, $id){
        $cup = Cup::find($id);
        $cup->name = $request['name'];
        $cup->save();
        return redirect()->route('admin');
    }
    public function processEditTour(Request $request, $id){
        $tour = Tour::find($id);
        $tour->number = $request['name'];
        $tour->cup_id = $request['category'];
        $tour->save();
        return redirect()->route('admin');
    }
    public function processEditTeam(Request $request, $id){
        $team = Team::find($id);
        $team->name = $request['name'];
        $team->logo = $request['logo'];
        $team->cup_id = $request['category'];
        $team->save();
        return redirect()->route('admin');
    }
    public function processEditPlayer(Request $request, $id){
        $player = Player::find($id);
        $player->name = $request['name'];
        $player->surname = $request['surname'];
        $player->team_id = $request['category'];
        $player->photo = $request['photo'];
        if (isset($request['leftGames'])){
            $disqualification = Disqualification::find($player['disqualification_id']);
            $disqualification->left_games = $request['leftGames'];
            $disqualification->save();
            $player->disqualification_id = $disqualification['id'];
        }
        $card = Yellow_card::find($player['yellow_cards_id']);
        $card->amount_of_cards = $request['cardsNum'];
        $card->save();
        $player->yellow_cards_id = $card['id'];
        $player->save();
        return redirect()->route('admin');
    }
    public function processEditGame(Request $request, $id){
        $game = Game::find($id);
        $game->team1_id = $request['category1'];
        $game->team2_id = $request['category2'];
        $game->tour_id = $request['tour'];
        $game->date = $request['date'];
        $game->status = $request['status'];
        $game->save();
        return redirect()->route('admin');
    }

    public function addCup(){
        $divisions = Division::all();
        return view('cup',['divisions'=>$divisions]);
    }
    public function addTour(){
        $cups = Cup::all();
        return view('tour',['cups'=>$cups]);
    }
    public function addTeam(){
        $cups = Cup::all();
        return view('team',['cups'=>$cups]);
    }
    public function addDiv(){
        return view('division');
    }
    public function addPlayer(){
        $teams = Team::all();
        return view('player',['teams'=>$teams]);
    }
    public function addGame(){
        $teams = Team::all();
        $tours = Tour::all();
        return view('game',['teams'=>$teams],['tours'=>$tours]);
    }
    public function makeTransfer(){
        $teams = Team::all();
        $players = Player::all();
        return view('transfer',['teams'=>$teams],['players'=>$players]);
    }
    public function makePromotion(){
        $teams = Team::all();
        $divs = Division::all();
        return view('promotion',['teams'=>$teams],['divs'=>$divs]);
    }


    public function editDivs(){
        $divisions = Division::all();
        return view('edit_divisions',['divisions'=>$divisions]);
    }
    public function editCups(){
        $cups = Cup::all();
        return view('edit_cups',['cups'=>$cups]);
    }
    public function editTours(){
        $tours = Tour::all();
        return view('edit_tours',['tours'=>$tours]);
    }
    public function editTeams(){
        $teams = Team::all();
        return view('edit_teams',['teams'=>$teams]);
    }
    public function editPlayers(){
        $players = Player::all();
        return view('edit_players',['players'=>$players]);
    }
    public function editGames(){
        $games = Game::all();
        $teams = Team::all();
        return view('edit_games',['teams'=>$teams],['games'=>$games]);
    }
}
