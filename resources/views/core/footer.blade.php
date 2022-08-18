<script src="https://code.jquery.com/jquery.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var SizeTable = [
        []
    ];
    var count = 0;
    var win = 0;
    window.onload = function() {
        CreateTable(3);
    };

    var X = Math.random() < 0.5;
    var O = Math.random() < 0;
    if (X) {
        O = false;
    } else {
        O = true;
    }
    const CreateTable = (x = null, s = null) => {
        if (s == "show") {
            Swal.fire({
                title: "คุณต้องการดู replay หรือไม่?",
                text: "",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "ต้องการ",
                cancelButtonText: "ไม่ต้องการ",
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("ButtonPlay").style.display = null;
                    document.getElementById("ShowWalk").style.display = null;
                    if (X) {
                        PlayerX.classList.add("TextTurn");
                        O = false;
                    } else {
                        PlayerO.classList.add("TextTurn");
                        O = true;
                    }
                    const TableTicTacToe =
                        document.getElementById("TableTicTacToe");
                    SizeTable = [
                        []
                    ];
                    TableTicTacToe.innerHTML = " ";
                    win = 0;
                    count = 0;
                    var length = document.getElementById("length").value;

                    if (x >= length) {
                        length = x;
                    }
                    if (length >= 3) {
                        for (row = 0; row < length; row++) {
                            if (s == "show") {
                                SizeTable[row] = [];
                                const Block = document.createElement("div");
                                Block.setAttribute(
                                    "class",
                                    "d-flex flex-row justify-content-center"
                                );
                                TableTicTacToe.append(Block);
                                for (col = 0; col < length; col++) {
                                    SizeTable[row][col] = " ";
                                    const InnerBox = document.createElement("div");
                                    InnerBox.setAttribute("class", "bg-light m-1");
                                    Block.append(InnerBox);
                                    const InputBlock =
                                        document.createElement("input");
                                    InputBlock.setAttribute("type", "button");
                                    InputBlock.setAttribute("id", row + "," + col);
                                    InputBlock.setAttribute("disabled", "");
                                    InputBlock.setAttribute(
                                        "onclick",
                                        "SelectChannel(" + row + "," + col + ")"
                                    );
                                    InputBlock.setAttribute(
                                        "class",
                                        "btn btn-outline-dark border border-3 border-dark "
                                    );
                                    InputBlock.setAttribute(
                                        "style",
                                        "width:130pt;height:130pt"
                                    );
                                    InnerBox.append(InputBlock);
                                }
                            } else {
                                SizeTable[row] = [];
                                const Block = document.createElement("div");
                                Block.setAttribute(
                                    "class",
                                    "d-flex flex-row justify-content-center"
                                );
                                TableTicTacToe.append(Block);
                                for (col = 0; col < length; col++) {
                                    SizeTable[row][col] = " ";
                                    const InnerBox = document.createElement("div");
                                    InnerBox.setAttribute("class", "bg-light m-1");
                                    Block.append(InnerBox);
                                    const InputBlock =
                                        document.createElement("input");
                                    InputBlock.setAttribute("type", "button");
                                    InputBlock.setAttribute("id", row + "," + col);
                                    InputBlock.setAttribute(
                                        "onclick",
                                        "SelectChannel(" + row + "," + col + ")"
                                    );
                                    InputBlock.setAttribute(
                                        "class",
                                        "btn btn-outline-dark border border-3 border-dark "
                                    );
                                    InputBlock.setAttribute(
                                        "style",
                                        "width:130pt;height:130pt"
                                    );
                                    InnerBox.append(InputBlock);
                                }
                            }
                        }
                    } else if (length < 3) {
                        alert("กรอกขนาดให้มากว่าหรือเท่ากับ 3x3 !!!");
                    }
                } else {}
            });
        } else {
            const PlayerX = document.getElementById("PlayerX");
            if (X) {
                PlayerX.classList.add("TextTurn");
                O = false;
            } else {
                PlayerO.classList.add("TextTurn");
                O = true;
            }

            const TableTicTacToe = document.getElementById("TableTicTacToe");
            SizeTable = [
                []
            ];
            TableTicTacToe.innerHTML = " ";
            win = 0;
            count = 0;
            var length = document.getElementById("length").value;

            if (x >= length) {
                length = x;
            }

            if (length >= 3) {
                for (row = 0; row < length; row++) {
                    if (s == "show") {
                        SizeTable[row] = [];
                        const Block = document.createElement("div");
                        Block.setAttribute(
                            "class",
                            "d-flex flex-row justify-content-center"
                        );
                        TableTicTacToe.append(Block);
                        for (col = 0; col < length; col++) {
                            SizeTable[row][col] = " ";
                            const InnerBox = document.createElement("div");
                            InnerBox.setAttribute("class", "bg-light m-1");
                            Block.append(InnerBox);
                            const InputBlock = document.createElement("input");
                            InputBlock.setAttribute("type", "button");
                            InputBlock.setAttribute("id", row + "," + col);
                            InputBlock.setAttribute("disabled", "");
                            InputBlock.setAttribute(
                                "onclick",
                                "SelectChannel(" + row + "," + col + ")"
                            );
                            InputBlock.setAttribute(
                                "class",
                                "btn btn-outline-dark border border-3 border-dark "
                            );
                            InputBlock.setAttribute(
                                "style",
                                "width:130pt;height:130pt"
                            );
                            InnerBox.append(InputBlock);
                        }
                    } else {
                        SizeTable[row] = [];
                        const Block = document.createElement("div");
                        Block.setAttribute(
                            "class",
                            "d-flex flex-row justify-content-center"
                        );
                        TableTicTacToe.append(Block);
                        for (col = 0; col < length; col++) {
                            SizeTable[row][col] = " ";
                            const InnerBox = document.createElement("div");
                            InnerBox.setAttribute("class", "bg-light m-1");
                            Block.append(InnerBox);
                            const InputBlock = document.createElement("input");
                            InputBlock.setAttribute("type", "button");
                            InputBlock.setAttribute("id", row + "," + col);
                            InputBlock.setAttribute(
                                "onclick",
                                "SelectChannel(" + row + "," + col + ")"
                            );
                            InputBlock.setAttribute(
                                "class",
                                "btn btn-outline-dark border border-3 border-dark "
                            );
                            InputBlock.setAttribute(
                                "style",
                                "width:130pt;height:130pt"
                            );
                            InnerBox.append(InputBlock);
                        }
                    }
                }
            } else if (length < 3) {
                alert("กรอกขนาดให้มากว่าหรือเท่ากับ 3x3 !!!");
            }
        }
    };

    const SelectChannel = (row, col) => {
        var length = document.getElementById("length").value;
        if (length < 3) {
            length = 3;
        }
        const TableTicTacToe = document.getElementById("TableTicTacToe");
        var PlayerX = document.getElementById("PlayerX");
        var PlayerO = document.getElementById("PlayerO");
        const IdBlock = document.getElementById(row + "," + col);
        if (X && SizeTable[row][col] == " ") {
            SizeTable[row][col] = "X";
            IdBlock.value = "X";
            IdBlock.classList.add("BlockClick");
            PlayerX.classList.remove("TextTurn");
            PlayerO.classList.remove("TextNextTurn");
            PlayerO.classList.add("TextTurn");
            PlayerX.classList.add("TextNextTurn");
            var todayDateTime = new Date().toLocaleString("en-US", {
                timeZone: "Asia/Shanghai",
            });
            $.ajax({
                url: "{{route('addStep')}}",
                method: "post",
                data: {
                    player: "X",
                    step: count + 1,
                    position: row + "," + col,
                    date: todayDateTime,
                    size_table: length,
                }
            });
            X = false;
            O = true;
            count++;
        } else if (O && SizeTable[row][col] == " ") {
            SizeTable[row][col] = "O";
            IdBlock.value = "O";
            IdBlock.classList.add("BlockClick");
            PlayerO.classList.remove("TextTurn");
            PlayerX.classList.remove("TextNextTurn");
            PlayerX.classList.add("TextTurn");
            PlayerO.classList.add("TextNextTurn");
            var todayDateTime = new Date().toLocaleString("en-US", {
                timeZone: "Asia/Shanghai",
            });
            $.ajax({
                url: "{{route('addStep')}}",
                type: "POST",
                data: {
                    player: "O",
                    step: count + 1,
                    position: row + "," + col,
                    select: "true",
                    date: todayDateTime,
                    size_table: length,
                }
            });
            O = false;
            X = true;
            count++;
        }

        if (count >= 5) {
            for (row = 0; row < SizeTable.length; row++) {
                for (col = 0; col < SizeTable.length; col++) {
                    if (
                        SizeTable[row]?. [col] != null &&
                        SizeTable[row]?. [col + 1] != null &&
                        SizeTable[row]?. [col + 2] != null &&
                        ((SizeTable[row]?. [col] == "X" &&
                                SizeTable[row]?. [col + 1] == "X" &&
                                SizeTable[row]?. [col + 2] == "X") ||
                            (SizeTable[row]?. [col] == "O" &&
                                SizeTable[row]?. [col + 1] == "O" &&
                                SizeTable[row]?. [col + 2] == "O"))
                    ) {
                        var todayDateTime = new Date().toLocaleString("en-US", {
                            timeZone: "Asia/Shanghai",
                        });
                        $.ajax({
                            url: "{{route('addStep_finally')}}",
                            method: "post",
                            data: {
                                player: SizeTable[row][col],
                                step: count,
                                status: "win",
                                date: todayDateTime,
                                size_table: length,
                            },
                        });
                        if (SizeTable[row][col] == "X") {
                            player = 'O';
                        } else {
                            player = 'X';
                        }
                        console.log(player);
                        $.ajax({
                            method: "post",
                            url: "{{route('addStep_finally_lost')}}",
                            data: {
                                player: player,
                                step: count,
                                status: "lost",
                                size_table: length,
                                date: todayDateTime,
                            },
                        });
                        alert("ผู้เล่น " + SizeTable[row][col] + " เป็นผู้ชนะ");
                        window.location.reload();
                        SizeTable = [
                            []
                        ];
                        TableTicTacToe.innerHTML = " ";
                        win = 1;
                        CreateTable(length);
                        break;
                    } else if (
                        SizeTable[row]?. [col] != null &&
                        SizeTable[row + 1]?. [col] != null &&
                        SizeTable[row + 2]?. [col] != null &&
                        ((SizeTable[row]?. [col] == "X" &&
                                SizeTable[row + 1]?. [col] == "X" &&
                                SizeTable[row + 2]?. [col] == "X") ||
                            (SizeTable[row]?. [col] == "O" &&
                                SizeTable[row + 1]?. [col] == "O" &&
                                SizeTable[row + 2]?. [col] == "O"))
                    ) {
                        var todayDateTime = new Date().toLocaleString("en-US", {
                            timeZone: "Asia/Shanghai",
                        });
                        $.ajax({
                            method: "post",
                            url: "{{route('addStep_finally')}}",
                            data: {
                                player: SizeTable[row][col],
                                step: count,
                                status: "win",
                                date: todayDateTime,
                                size_table: length,
                            },
                        });
                        if (SizeTable[row][col] == "X") {
                            player = 'O';
                        } else {
                            player = 'X';
                        }
                        console.log(player);
                        $.ajax({
                            method: "post",
                            url: "{{route('addStep_finally_lost')}}",
                            data: {
                                player: player,
                                step: count,
                                status: "lost",
                                size_table: length,
                                date: todayDateTime,
                            },
                        });
                        alert("ผู้เล่น " + SizeTable[row][col] + " เป็นผู้ชนะ");
                        window.location.reload();
                        SizeTable = [
                            []
                        ];
                        TableTicTacToe.innerHTML = " ";
                        win = 1;
                        CreateTable(length);
                        break;
                    } else if (
                        SizeTable[row]?. [col] != null &&
                        SizeTable[row + 1]?. [col + 1] != null &&
                        SizeTable[row + 2]?. [col + 2] != null &&
                        ((SizeTable[row]?. [col] == "X" &&
                                SizeTable[row + 1]?. [col + 1] == "X" &&
                                SizeTable[row + 2]?. [col + 2] == "X") ||
                            (SizeTable[row]?. [col] == "O" &&
                                SizeTable[row + 1]?. [col + 1] == "O" &&
                                SizeTable[row + 2]?. [col + 2] == "O"))
                    ) {
                        var todayDateTime = new Date().toLocaleString("en-US", {
                            timeZone: "Asia/Shanghai",
                        });
                        $.ajax({
                            method: "post",
                            url: "{{route('addStep_finally')}}",
                            data: {
                                player: SizeTable[row][col],
                                step: count,
                                status: "win",
                                date: todayDateTime,
                                size_table: length,
                            },
                        });
                        if (SizeTable[row][col] == "X") {
                            player = 'O';
                        } else {
                            player = 'X';
                        }
                        console.log(player);
                        $.ajax({
                            method: "post",
                            url: "{{route('addStep_finally_lost')}}",
                            data: {
                                player: player,
                                step: count,
                                status: "lost",
                                size_table: length,
                                date: todayDateTime,
                            },
                        });
                        alert("ผู้เล่น " + SizeTable[row][col] + " เป็นผู้ชนะ");
                        window.location.reload();
                        SizeTable = [
                            []
                        ];
                        TableTicTacToe.innerHTML = " ";
                        win = 1;
                        CreateTable(length);
                        break;
                    } else if (
                        SizeTable[row]?. [col + 2] != null &&
                        SizeTable[row + 1]?. [col + 1] != null &&
                        SizeTable[row + 2]?. [col] != null &&
                        ((SizeTable[row]?. [col + 2] == "X" &&
                                SizeTable[row + 1]?. [col + 1] == "X" &&
                                SizeTable[row + 2]?. [col] == "X") ||
                            (SizeTable[row]?. [col + 2] == "O" &&
                                SizeTable[row + 1]?. [col + 1] == "O" &&
                                SizeTable[row + 2]?. [col] == "O"))
                    ) {
                        var player = SizeTable[row][col];
                        var todayDateTime = new Date().toLocaleString("en-US", {
                            timeZone: "Asia/Shanghai",
                        });
                        $.ajax({
                            method: "post",
                            url: "{{route('addStep_finally')}}",
                            data: {
                                player: player,
                                step: count,
                                status: "win",
                                size_table: length,
                                date: todayDateTime,
                            },
                        });
                        if (SizeTable[row][col] == "X") {
                            player = 'O';
                        } else {
                            player = 'X';
                        }
                        console.log(player);
                        $.ajax({
                            method: "post",
                            url: "{{route('addStep_finally_lost')}}",
                            data: {
                                player: player,
                                step: count,
                                status: "lost",
                                size_table: length,
                                date: todayDateTime,
                            },
                        });

                        alert("ผู้เล่น " + SizeTable[row][col] + " เป็นผู้ชนะ");
                        window.location.reload();
                        SizeTable = [
                            []
                        ];
                        TableTicTacToe.innerHTML = " ";
                        win = 1;
                        CreateTable(length);
                        break;
                    }
                }
            }
        }
        if (count == SizeTable.length * SizeTable.length && win != 1) {
            var todayDateTime = new Date().toLocaleString("en-US", {
                timeZone: "Asia/Shanghai",
            });
            $.ajax({
                method: "post",
                url: "{{route('addStep_draw')}}",
                data: {
                    step: count,
                    status: "draw",
                    size_table: length,
                    draw: "true",
                    date: todayDateTime,
                },
            });
            alert("ทั้งคู่เสมอกัน !!!");
            window.location.reload();
            SizeTable = [
                []
            ];
            TableTicTacToe.innerHTML = " ";
            CreateTable(length);
        }
    };

    function ResetScore() {
        Swal.fire({
            title: "คุณต้องการลบประวัติการเล่น หรือไม่?",
            text: "",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "ต้องการ",
            cancelButtonText: "ไม่ต้องการ",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    method: "post",
                    url: "{{route('delete')}}"
                });
                window.location.reload();
            } else {}
        });
    }

    function ShowStep(position, player) {
        var IdBlock = document.getElementById(position);
        if (IdBlock.value == "") {
            IdBlock.value = player;
            IdBlock.classList.add("BlockClick");
        } else {
            IdBlock.value = "";
            IdBlock.classList.remove("BlockClick");
        }
    }

    function play() {
        document.getElementById("ButtonPlay").style.display = "none";
        CreateTable(3);
    }
</script>
</body>

</html>