{{View::make('core/header')}}
<div class="container-fluid">
    <br />
    <br />
    <div class="row justify-content-center">

        <div class="col-3">
            <label class="form-label">
                <h2>
                    <font id="PlayerX">Player X :</font> ชนะ {{$win_X[0]->count_win}},<font class="TextLost">แพ้ {{$lost_X[0]->count_lost}}</font>
                </h2>
            </label>

        </div>
        <div class="col-3 bg-light p-2">
            <input class="form-control" type="number" min="3" id="length" placeholder="กรอกขนาดตารางที่ต้องการ" />
        </div>
        <div class="col-1 bg-light p-2">
            <button class="btn btn-dark" style="width: 100%" type="button" onclick="CreateTable() ">
                เลือก
            </button>
        </div>
        <div class="col-1 bg-light p-2">
            <button class="btn btn-danger" style="width: 100%" type="button" onclick="ResetScore() ">
                รีเซต
            </button>
        </div>
        <div class="col-3" align="right">
            <label class="form-label ">
                <h2>
                    <font id="PlayerO">Player O :</font> ชนะ {{$win_O[0]->count_win}},<font class="TextLost">แพ้ {{$lost_O[0]->count_lost}}</font>
                </h2>
            </label>

        </div>
        <div class="row mt-3 " id="TableTicTacToe">
        </div>

        <div class="row mt-3">
            <center>
                <button class="btn btn-success w-25" type="button" onclick="play()" style="display: none;" id="ButtonPlay">คลิกเพื่อเล่น</button>
            </center>
        </div>

        <div class="row mt-4">

            <div class="col-5">
                @if($table_walk)
                <label class="form-label">
                    <h4>ตารางสกอล่าสุด</h4>
                </label>
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ขนาด</th>
                            <th>ตาที่</th>
                            <th>ผู้เล่น</th>
                            <th>สกอร์</th>
                            <th>เวลา</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($table_walk as $table_walk)
                        <tr>
                            <td>
                                <p>{{$table_walk->size_table}}X{{$table_walk->size_table}}</p>
                            </td>
                            <td>
                                <p>{{$table_walk->step}}</p>
                            </td>
                            <td>
                                <p>{{$table_walk->player}}</p>
                            </td>
                            <td>
                                <p>{{$table_walk->status}}</p>
                            </td>
                            <td>{{$table_walk->created_at}}</td>
                            <td>
                                <button class="btn btn-warning" type="button" onclick="CreateTable('{{$table_walk->size_table}}','show')">ดูเกม</button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                @endif
            </div>

            <div class="col-7" style="display:none ;" id="ShowWalk">
                <label class="form-label">
                    <h4>ลำดับการเลือก</h4>
                </label>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th colspan="100%">การเดินเกม</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($table_walk_step as $table_walk_step)
                        @php
                        $count = 0
                        @endphp
                        @if($table_walk_step->status == NULL && $count == 0)
                        @php
                        $count = 1
                        @endphp
                        @endif
                        @if($table_walk_step->status == NULL)
                        <td><button class="btn btn-dark" type="button" onclick="ShowStep('{{$table_walk_step->position}}','{{$table_walk_step->player}}')">{{$table_walk_step->step}}</button></td>
                        @endif
                        @if ($table_walk_step->status == 'lost' || $table_walk_step->status == 'draw')
                        </tr>
                        @php
                        $count = 0
                        @endphp
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>
{{View::make('core/footer')}}