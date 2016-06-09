@extends('main')

@section('title', 'Calendar')

@section('pageTitle', 'Calendar')


@section('stylesheets')

    <style type="text/css">

        .noselect {
            -webkit-user-select: none;
            /* Chrome/Safari */
            -moz-user-select: none;
            /* Firefox */
            -ms-user-select: none;
            /* IE10+ */
        }

        #mini-clndr {
            font-family: Asap, Helvetica, Arial;
            margin: 0 auto;
            width: 324px;
            height: auto;
            /*  -moz-box-shadow: 4px 4px 0 #343434;
              -webkit-box-shadow: 4px 4px 0 #343434;
              box-shadow: 4px 4px 0 #343434;*/
        }
        #mini-clndr .clndr {
            /*overflow-x: hidden;*/
            overflow-y: visible;
            /*border-bottom: 7px solid #69a776;*/
        }
        #mini-clndr .clndr .controls {
            /*background-color: #69a776;*/
            background-color: #47A3DA;
            color: white;
        }
        #mini-clndr .clndr .controls .clndr-previous-button,
        #mini-clndr .clndr .controls .clndr-next-button {
            width: 15%;
            padding-top: 5px;
            padding-bottom: 5px;
            display: inline-block;
            text-align: center;
            cursor: pointer;
            -webkit-user-select: none;
            /* Chrome/Safari */

            -moz-user-select: none;
            /* Firefox */

            -ms-user-select: none;
            /* IE10+ */

            -webkit-transition: background-color 0.5s;
            -moz-transition: background-color 0.5s;
            -ms-transition: background-color 0.5s;
            -o-transition: background-color 0.5s;
            transition: background-color 0.5s;
        }
        #mini-clndr .clndr .controls .clndr-previous-button:hover,
        #mini-clndr .clndr .controls .clndr-next-button:hover {
            /*background-color: #528b5e;*/
            background-color: #2A91CF;
        }
        #mini-clndr .clndr .controls .month {
            width: 70%;
            padding-top: 5px;
            padding-bottom: 5px;
            display: inline-block;
            text-align: center;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
        }
        #mini-clndr .clndr .days-container {
            position: relative;
            width: 100%;
            height: 186px;
            display: inline-block;
        }
        #mini-clndr .clndr .days-container .days {
            position: absolute;
            left: 0;
            /*width: 100%;*/
            /*height: auto;*/
            -webkit-transition: left 0.5s;
            -moz-transition: left 0.5s;
            -ms-transition: left 0.5s;
            -o-transition: left 0.5s;
            transition: left 0.5s;
            /*background-color: #ebebeb;*/
        }
        #mini-clndr .clndr .days-container .days .day,
        #mini-clndr .clndr .days-container .days .empty {
            width: 45px;
            display: inline-block;
            padding-top: 8px;
            padding-bottom: 8px;
            font-size: 1em;
            text-align: center;
            /*color: #212121;*/
            color: #212121;
            border-right: 1px solid rgba(255, 255, 255, 0.5);
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
        }
        #mini-clndr .clndr .days-container .days .day.event,
        #mini-clndr .clndr .days-container .days .empty.event {
            /*background-color: #d2d2d2;*/
            background-color: #0D77B6;
            -webkit-transition: background-color 0.5s;
            -moz-transition: background-color 0.5s;
            -ms-transition: background-color 0.5s;
            -o-transition: background-color 0.5s;
            transition: background-color 0.5s;
            cursor: pointer;
        }
        #mini-clndr .clndr .days-container .days .day.event:hover,
        #mini-clndr .clndr .days-container .days .empty.event:hover {
            /*background-color: #b8b8b8;*/
            background-color: #0D77B6;
        }
        #mini-clndr .clndr .days-container .days .day.adjacent-month,
        #mini-clndr .clndr .days-container .days .empty.adjacent-month {
            color: rgba(0, 0, 0, 0.3);
        }
        #mini-clndr .clndr .days-container .days .empty {
            height: 31px;
            vertical-align: bottom;
        }
        #mini-clndr .clndr .days-container .days .headers {
            /*background-color: #97ce7f;*/
            background-color: #0D77B6;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        #mini-clndr .clndr .days-container .days .headers .day-header {
            width: 46px;
            display: inline-block;
            text-align: center;
            color: white;
        }



    </style>
@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="article">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">



                        <div id="mini-clndr"></div>

                        <script id="calendar-template" type="text/template">
                            <div class="controls">
                                <div class="clndr-previous-button">&lsaquo;</div><div class="month"><%= month %></div><div class="clndr-next-button">&rsaquo;</div>
      </div>

      <div class="days-container">
        <div class="days">
          <div class="headers">
            <% _.each(daysOfTheWeek, function(day) { %><div class="day-header"><%= day %></div><% }); %>
          </div>
          <% _.each(days, function(day) { %><div class="<%= day.classes %>" id="<%= day.id %>"><%= day.day %></div><% }); %>
        </div>
      </div>
    </script>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('/js/plugins/clndr/moment.min.js') !!}
    {!! Html::script('/js/plugins/clndr/underscore-min.js') !!}
    {!! Html::script('/js/plugins/clndr/clndr.min.js') !!}

    <script>
      var currentMonth = moment().format('YYYY-MM');
  var nextMonth    = moment().add('month', 1).format('YYYY-MM');
  var events = [
    { date: currentMonth + '-' + '10', title: 'Persian Kitten Auction', location: 'Center for Beautiful Cats' },
    { date: currentMonth + '-' + '19', title: 'Cat Frisbee', location: 'Jefferson Park' },
    { date: currentMonth + '-' + '23', title: 'Kitten Demonstration', location: 'Center for Beautiful Cats' },
    { date: nextMonth + '-' + '07',    title: 'Small Cat Photo Session', location: 'Center for Cat Photography' }
  ];

$('#mini-clndr').clndr({
    template: $('#calendar-template').html(),
    events: events,
    clickEvents: {
      click: function(target) {
        if(target.events.length) {
          var daysContainer = $('#mini-clndr').find('.days-container');
          daysContainer.toggleClass('show-events', true);
          $('#mini-clndr').find('.x-button').click( function() {
            daysContainer.toggleClass('show-events', false);
          });
        }
      }
    },
    adjacentDaysChangeMonth: true
  });
  </script>


@endsection