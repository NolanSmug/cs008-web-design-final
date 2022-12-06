<?php 
include 'top.php';
?>

<main class="mainPage">

<!-- Led Zeppelin -->
        <section class="ledZeppelin">
            <h2>Led Zeppelin</h2>
            <p>Led Zeppelin is a staple of rock history. Backed by guitarist 
                Jimmy Page, the band has gone on to develop many beloved albums recognized around the
                world. Founded in 1968, the band quickly established itself as a powerhouse of the rock 
                genre, with their debut album hitting the top-ten in many countries and immediately 
                putting them on the radar of many rock enthusiasts. Jimmy Page's guitar style was noted 
                by musicologist Robert Walser as defining the band with his "heavily distorted crunch." 
                Page's aggressive style was influenced by Scottish folk guitarist Bert Jansch. Early in
                the band's career, Page would often write his music before any other parts were created.
            </p>

                <table>
                    <caption class="tableCaption"><strong>Led Zeppelin Albums</strong></caption>
                    <tr class="tabHeadings">    
                            <th>Album Name</th>
                            <th>Year Released</th>
                            <th># of Songs</th>
                            <th>Length</th>

                    <?php
                    $sql = 'SELECT fldName, fldYear, fldSongs, fldLength FROM tblLedZeppelin';

                    $statement = $pdo->prepare($sql);
                    $statement->execute();

                    $records = $statement->fetchAll();

                    foreach ($records as $record) {
                        print '<tr>';
                        print '<td>' . '<em>' . $record['fldName'] . '</em>' . '</td>';
                        print '<td>' . $record['fldYear'] . '</td>';
                        print '<td>' . $record['fldSongs'] . '</td>';
                        print '<td>' . $record['fldLength'] . '</td>';
                        print '</tr>' . PHP_EOL;
                    }
                    ?>
                    <tr class="citation">    
                        <td colspan="4">Citations: <cite><a href="https://en.wikipedia.org/wiki/Led_Zeppelin" target="_blank">
                            Wikimedia</a></cite>
                        </td>
                    </tr>
                </table>
        </section>

        <div class="ledZeppelinImage">
                <figure>
                    <img src="images/ledzeppelin.png" alt="Led Zeppelin Band Photo">
                    <cite>Rolling Stone</cite>
                </figure>
        </div>



<!-- Foo Fighters -->
        <section class="fooFighters">
            <h2>Foo Fighters</h2> 
            <p>Formed by other guitar-heavy bands such as Queen and Grohl took direct inspiration from former
                Nirvana bandmate and guitarist Kurt Cobain, heavily influencing the band's musical style, 
                especially in their earlier years. The band has been active for nearly 30 years, with many 
                personnel shifts, but the guitar has always been and continues to be a staple of the band.
            </p>

            <table>
                <caption class="tableCaption"><strong>Foo Fighters Albums</strong></caption>
                <tr class="tabHeadings">    
                        <th>Album Name</th>
                        <th>Year Released</th>
                        <th># of Songs</th>
                        <th>Length</th>

                <?php
                $sql = 'SELECT fldName, fldYear, fldSongs, fldLength FROM tblFooFighters';

                $statement = $pdo->prepare($sql);
                $statement->execute();

                $records = $statement->fetchAll();

                foreach ($records as $record) {
                    print '<tr>';
                    print '<td>' . '<em>' . $record['fldName'] . '</em>' . '</td>';
                    print '<td>' . $record['fldYear'] . '</td>';
                    print '<td>'. $record['fldSongs'] . '</td>';
                    print '<td>' . $record['fldLength'] . '</td>';
                    print '</tr>' . PHP_EOL;
                }
                ?>
                    <tr class="citation">    
                        <td colspan="4">Citations: <cite><a href="https://en.wikipedia.org/wiki/Foo_Fighters" target="_blank">
                            Wikimedia</a></cite>
                        </td>
                   
            </table>
        </section>

        <div class="fooFightersImage">
            <figure>
                <img src="images/foofighters.jpeg" alt="Foo Fighters Band Photo">
                <cite>Wikipedia</cite>
            </figure>
        </div>


<!-- Fleetwood Mac -->
        <section class="fleetwoodMac">
            <h2>Fleetwood Mac</h2> 
                <p>For the past 50 years, the legendary tunes of Fleetwood Mac have continued to embed 
                    themselves in car radios and Spotify playlists alike. Despite a sad history of 
                    inner-band conflicts, drugs, and plenty of departures, Fleetwood Mac somehow managed 
                    to create many critically and commercially successful albums and songs. Backed by a 
                    plethora of guitarists, including founder Peter Green and guitar legend Lindsey 
                    Buckingham, the band's Britsh blues (and later pop rock) inspired  sound catapulted 
                    them into the mainstream, where they remain today with hits such as Albatross, Rhiannon,
                    and Dreams.
                </p>

            <table>
                <caption class="tableCaption"><strong>Fleetwood Mac Albums</strong></caption>
                <tr class="tabHeadings">    
                        <th>Album Name</th>
                        <th>Year Released</th>
                        <th># of Songs</th>
                        <th>Length</th>
                
                
                <?php
                $sql = 'SELECT fldName, fldYear, fldSongs, fldLength FROM tblFleetwoodMac';

                $statement = $pdo->prepare($sql);
                $statement->execute();

                $records = $statement->fetchAll();

                foreach ($records as $record) {
                    print '<tr>';
                    print '<td>' . '<em>' . $record['fldName'] . '</em>' . '</td>';
                    print '<td>' . $record['fldYear'] . '</td>';
                    print '<td>' . $record['fldSongs'] . '</td>';
                    print '<td>' . $record['fldLength'] . '</td>';
                    print '</tr>' . PHP_EOL;
                }
                ?>
                    <tr class="citation">    
                        <td colspan="4">Citations: <cite><a href="https://en.wikipedia.org/wiki/Fleetwood_Mac" target="_blank">
                            Wikimedia</a></cite>
                        </td>
                    </tr>
            </table> 
        </section> 

        <div class="fleetwoodMacImage">
            <figure>
                <img src="images/fleetwoodmac.jpeg" alt="Fleetwood Mac Band Photo">
                <cite>Wikipedia</cite>
            </figure>
        </div>

    </main>
<?php include 'footer.php'; ?>