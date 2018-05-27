function startTime()
{
  var hariini = new Date();
  var hour = today.getHours();
  var minute = today.getMinutes();
  var second = today.getSeconds();
  minute = checkTime(minute);
  second = checkTime(second);
  documents.getElementById('jamdinding').innetHTML = hour + ":" + minute + ":" + second;
  var t = setTimeout(startTime,500);
}

function checkTime(i)
{
  if (i<10){i = "0" + i};
  return i;
}
