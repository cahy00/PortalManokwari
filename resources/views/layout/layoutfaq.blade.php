<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>paq page - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style type="text/css">
      body {
        background: #f5f5f6;
        margin-top: 20px;
      }
      /*Faq*/

      .faq-search-wrap {
        padding: 50px 0 60px;
      }

      .faq-search-wrap .form-group .form-control,
      .faq-search-wrap .form-group .dd-handle {
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
      }

      .faq-search-wrap .form-group .input-group-append {
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: 10;
        pointer-events: none;
      }

      .faq-search-wrap .form-group .input-group-append .input-group-text {
        background: transparent;
        border: none;
      }

      .faq-search-wrap
        .form-group
        .input-group-append
        .input-group-text
        .feather-icon
        > svg {
        height: 18px;
        width: 18px;
      }
      .bg-teal-light-3 {
        background-color: #7fcdc1 !important;
      }

      .hk-row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -10px;
        margin-left: -10px;
      }

      @media (min-width: 576px) {
        .mt-sm-60 {
          margin-top: 60px !important;
        }
      }
      .mt-30 {
        margin-top: 30px !important;
      }

      .list-group-item.active {
        background-color: #00acf0;
        border-color: #00acf0;
      }
      .accordion .card .card-header.activestate {
        border-width: 1px;
      }
      .accordion .card .card-header {
        padding: 0;
        border-width: 0;
      }
      .card.card-lg .card-header,
      .card.card-lg .card-footer {
        padding: 0.9rem 1.5rem;
      }
      .accordion > .card .card-header {
        margin-bottom: -1px;
      }
      .card .card-header {
        background: transparent;
        border: none;
      }
      .accordion.accordion-type-2 .card .card-header > a.collapsed {
        color: #324148;
      }
      .accordion .card:first-of-type .card-header:first-child > a {
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
      }
      .accordion.accordion-type-2 .card .card-header > a {
        background: transparent;
        color: #00acf0;
        padding-left: 50px;
      }
      .accordion .card .card-header > a.collapsed {
        color: #324148;
        background: transparent;
      }
      .accordion .card .card-header > a {
        background: #00acf0;
        color: #fff;
        font-weight: 500;
        padding: 0.75rem 1.25rem;
        display: block;
        width: 100%;
        text-align: left;
        position: relative;
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
      }
      a {
        text-decoration: none;
        color: #00acf0;
        -webkit-transition: color 0.2s ease;
        -moz-transition: color 0.2s ease;
        transition: color 0.2s ease;
      }

      .badge.badge-pill {
        border-radius: 50px;
      }
      .badge.badge-light {
        background: #eaecec;
        color: #324148;
      }
      .badge {
        font-weight: 500;
        border-radius: 4px;
        padding: 5px 7px;
        font-size: 72%;
        letter-spacing: 0.3px;
        vertical-align: middle;
        display: inline-block;
        text-align: center;
        text-transform: capitalize;
      }
      .ml-15 {
        margin-left: 15px !important;
      }

      .accordion.accordion-type-2 .card .card-header > a.collapsed:after {
        content: "\f158";
      }

      .accordion.accordion-type-2 .card .card-header > a::after {
        display: inline-block;
        font: normal normal normal 14px/1 "Ionicons";
        speak: none;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: auto;
        position: absolute;
        content: "\f176";
        font-size: 21px;
        top: 15px;
        left: 20px;
      }

      .mr-15 {
        margin-right: 15px !important;
      }
    </style>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css"
      integrity="sha256-F3Xeb7IIFr1QsWD113kV2JXaEbjhsfpgrKkwZFGIA4E="
      crossorigin="anonymous"
    />
  </head>
  <body>
    @yield('content')
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
  </body>
</html>
