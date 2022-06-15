<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="pb-4">
        <div class="bg-white border rounded-5">
          
          <section class="w-100 p-4 d-flex justify-content-center pb-4">
            <div style="width: 22rem;" class="form-outline timepicker">
              <input type="text" class="form-control" id="form1" />
              <label class="form-label" for="form1">Select a time</label>
            </div>
          </section>


        <script type="module" type="text/javascript">
  // Increment
  const pickerInc = document.querySelector('.timepicker-inc');
  const timepickerInc = new mdb.Timepicker(pickerInc, {
    increment: true,
  });

  //Max/Min
  const pickerMaxMin = document.querySelector('.timepicker-max-min');
  const timepickerMaxMin = new mdb.Timepicker(pickerMaxMin, {
    maxHour: '12',
    minHour: '5',
  });

  //Max hour
  const pickerMax = document.querySelector('.timepicker-max');
  const timepickerMax = new mdb.Timepicker(pickerMax, {
    maxHour: '5',
  });

  //Min hour
  const pickerMin = document.querySelector('.timepicker-min');
  const timepickerMin = new mdb.Timepicker(pickerMin, {
    minHour: '8',
  });

  //Max time
  const pickerMaxTime = document.querySelector('.timepicker-max-time');
  const timepickerMaxTime = new mdb.Timepicker(pickerMaxTime, {
    maxTime: '6:35',
  });

  //Min time
  const pickerMinTime = document.querySelector('.timepicker-min-time');
  const timepickerMinTime = new mdb.Timepicker(pickerMinTime, {
    minTime: '10:15',
  });

  //Inline 12h
  const pickerInline12 = document.querySelector('.timepicker-inline-12');
  const timepickerInline12 = new mdb.Timepicker(pickerInline12, {
    inline: true,
    format12: true,
  });

  //Inline 24h
  const pickerInline24 = document.querySelector('.timepicker-inline-24');
  const timepickerInline24 = new mdb.Timepicker(pickerInline24, {
    inline: true,
    format24: true,
  });

  //Max time PM/AM
  const pickerMaxTimePM = document.querySelector('.timepicker-max-time-pm');
  const pickerMaxTimeAM = document.querySelector('.timepicker-max-time-am');

  const tmMaxPm = new mdb.Timepicker(pickerMaxTimePM, {
    maxTime: '6:35 PM',
  });
  const tmMaxAm = new mdb.Timepicker(pickerMaxTimeAM, {
    maxTime: '6:35 AM',
  });

  //Min time PM/AM
  const pickerMinTimePM = document.querySelector('.timepicker-min-time-pm');
  const pickerMinTimeAM = document.querySelector('.timepicker-min-time-am');

  const tmMinPm = new mdb.Timepicker(pickerMinTimePM, {
    minTime: '6:35 PM',
  });
  const tmMinAm = new mdb.Timepicker(pickerMinTimeAM, {
    minTime: '6:35 AM',
  });

  //Default time string PM
  const pickerStartedPM = document.querySelector('.timepicker-default-time-string-pm');
  const tmStartedPM = new mdb.Timepicker(pickerStartedPM, {
    defaultTime: '02:12 PM',
  });

  //Default time string AM
  const pickerStartedAM = document.querySelector('.timepicker-default-time-string-am');
  const tmStartedAM = new mdb.Timepicker(pickerStartedAM, {
    defaultTime: '05:12 AM',
  });

  //Default time without PM/AM
  const pickerStartedWithoutPmAm = document.querySelector(
    '.timepicker-default-time-string-without-pm-am'
  );
  const tmStartedWithoutPmAm = new mdb.Timepicker(pickerStartedWithoutPmAm, {
    defaultTime: '05:12',
  });

  //Default time with 24h
  const pickerStartedWith24h = document.querySelector('.timepicker-default-time-string-24h');
  const tmStartedWith24h = new mdb.Timepicker(pickerStartedWith24h, {
    defaultTime: '23:44',
    format24: true,
  });

  //Default time date 12h
  const pickerStartedWithDate12h = document.querySelector(
    '.timepicker-default-time-with-new-date-12h'
  );
  const tmStartedWithDate12h = new mdb.Timepicker(pickerStartedWithDate12h, {
    defaultTime: new Date(),
  });

  //Default time date 24h
  const pickerStartedWithDate24h = document.querySelector(
    '.timepicker-default-time-with-new-date-24h'
  );
  const tmStartedWithDate24h = new mdb.Timepicker(pickerStartedWithDate24h, {
    defaultTime: new Date(),
    format24: true,
  });

  const timepickerValue = document.querySelector('#timepicker-value');
  const tminputValue = new mdb.Timepicker(timepickerValue);

  timepickerValue.addEventListener('input.mdb.timepicker', (input) => {
    const valueDiv = document.querySelector('#span-input-value');

    valueDiv.innerText = input.target.value;
  });

  //Without icon
  const wiTimepicker = document.querySelector('#timepicer-without-icon');
  const wiInitTimepicker = new mdb.Timepicker(wiTimepicker, {
    withIcon: false,
  });
</script>


</body>
</html>