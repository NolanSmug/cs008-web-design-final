<?php 
include 'top.php';
?>

<main class="sql">
    <h2>Index</h2>

    <p>Led Zeppelin Table</p>
    <pre>
        CREATE TABLE tblLedZeppelin(
            pmkZeppelinId INT AUTO_INCREMENT PRIMARY KEY,
            fldName VARCHAR(200),
            fldYear VARCHAR(40),
            fldSongs VARCHAR(40),
            fldLength VARCHAR(40)
        )
    </pre>

    <p>Insert Data Led Zeppelin</p>
    <pre>
        INSERT INTO tblLedZeppelin
        (fldName, fldYear, fldSongs, fldLength)
        VALUES
        ("Led Zeppelin", 1969, 9, "44:45"),
        ("Led Zeppelin II", 1969, 9, "41:38"),
        ("Led Zeppelin III", 1970, 10, "43:04")
    </pre>



    <p>Foo Fighters Table</p>
    <pre>
        CREATE TABLE tblFooFighters(
            pmkFooFightersId INT AUTO_INCREMENT PRIMARY KEY,
            fldName VARCHAR(200),
            fldYear VARCHAR(40),
            fldSongs VARCHAR(40),
            fldLength VARCHAR(40)
        )
    </pre>

    <p>Insert Data Foo Fighters</p>
    <pre>
        INSERT INTO tblFooFighters
        (fldName, fldYear, fldSongs, fldLength)
        VALUES
        ("Foo Fighters", 1995, 12, "44:24"),
        ("One by One", 2002, 11, "55:11"),
        ("Sonic Highways", 2014, 8, "42:04")
    </pre>



    <p>Fleetwood Mac Table</p>
    <pre>
        CREATE TABLE tblFleetwoodMac(
            pmkFleetwoodMacId INT AUTO_INCREMENT PRIMARY KEY,
            fldName VARCHAR(200),
            fldYear VARCHAR(40),
            fldSongs VARCHAR(40),
            fldLength VARCHAR(40)
        )
    </pre>

    <p>Insert Data Fleetwood Mac</p>
    <pre>
        INSERT INTO tblFleetwoodMac
        (fldName, fldYear, fldSongs, fldLength)
        VALUES
        ("The White Album", 1975, 11, "42:12"),
        ("Rumours", 1977, 11, "38:55"),
        ("Tusk", 1979, 20, "74:25")
    </pre>










    <h2>Form</h2>
    <p>Create Form Table SQL</p>

    <pre>
        CREATE TABLE tblGenreForm(
                pmkGenreForm int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                fldFirst varchar(50) DEFAULT NULL,
                fldLast varchar(50) DEFAULT NULL,
                fldEmail varchar(50) DEFAULT NULL,
                fldInstrument varchar(11) DEFAULT NULL,
                fldRock tinyint(1) DEFAULT 0,
                fldJazz tinyint(1) DEFAULT 0,
                fldHipHop tinyint(1) DEFAULT 0,
                fldRandB tinyint(1) DEFAULT 0
            )
    </pre>

    <p>Inserted Sample Form Data SQL</p>

    <pre>
        INSERT INTO tblGreenhouseForm
        (pmkGreenhouseForm, fldFirst, fldLast, fldEmail, fldFrequency, fldCar, fldBus, fldRail, fldPlane)
        VALUES
        (1, 'Nolan', 'Cyr', 'nolan.cyr@uvm.edu', 'Every', 0, 0, 1, 0);
    </pre>



</main>
<?php include 'footer.php'; ?>