<?php
$ch = curl_init("http://localhost:3000/songs");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, "");
curl_setopt($ch, CURLOPT_COOKIEJAR, "");

$response = curl_exec($ch);
curl_close($ch);

$songs = json_decode($response, true);
?>

<?php foreach ($songs as $song): ?>
  <div onclick="playSong(<?php echo $song['song_id'] ?>)">
    🎵 <?= $song['title'] ?> – <?= $song['artist'] ?>
  </div>

<?php endforeach; ?>
<audio id="player" controls></audio>

<div id="karaoke"></div>

  <style>#karaoke {
    height: 300px;
    overflow: hidden;
    text-align: center;
    font-family: Arial;
    margin-top: 30px;
  }

  .line {
    font-size: 18px;
    opacity: 0.4;
    margin: 10px 0;
    transition: 0.3s;
  }

  .line.active {
    font-size: 28px;
    opacity: 1;
    color: #000;
    text-shadow: 0 0 15px #121313ff;
  }
</style>

<script>
  const audio = document.getElementById("player")
  const karaoke = document.getElementById("karaoke")

  function playSong(id) {
    document.getElementById("player").src =
      "http://localhost:3000/stream/" + id

    loadLyrics(id)
  }

  function renderLyrics() {
    karaoke.innerHTML = ""
    lyrics.forEach((l, i) => {
      const div = document.createElement("div")
      div.className = "line"
      div.innerText = l.text
      karaoke.appendChild(div)
    })
  }

  async function loadLyrics(id) {
    const res = await fetch("http://localhost:3000/lyrics/" + id)
    const text = await res.text()
    parseLyrics(text)
  }
  

  function parseLyrics(lrc) {
    lyrics = []
    lrc.split("\n").forEach(line => {
      const match = line.match(/\[(\d+):(\d+\.\d+)\](.*)/)
      if (match) {
        const time = Number(match[1]) * 60 + Number(match[2])
        lyrics.push({ time, text: match[3].trim() })
      }
    })
    renderLyrics()
  }




  audio.ontimeupdate = () => {
    const t = audio.currentTime

    for (let i = 0; i < lyrics.length; i++) {
      if (lyrics[i + 1] && t < lyrics[i + 1].time) {
        const lines = document.querySelectorAll(".line")
        lines.forEach(l => l.classList.remove("active"))
        lines[i].classList.add("active")

        karaoke.scrollTo({
          top: lines[i].offsetTop - karaoke.clientHeight / 2,
          behavior: "smooth"
        })


        break
      }
    }
  }


</script>