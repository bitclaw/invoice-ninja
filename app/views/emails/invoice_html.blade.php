<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

      {{ $clientName }},<p/>

      {{ trans('texts.invoice_message', ['amount' => $invoiceAmount]) }}<p/>      
      {{ $link }}<p/>

      @if ($emailFooter)
      {{ nl2br($emailFooter) }}
      @else
      {{ trans('texts.email_signature') }}<br/>
      {{ $accountName }}
      @endif

      <p/>
      {{ trans('texts.ninja_email_footer', ['site' => '<a href="'.SITE_URL.'">Invoice Ninja</a>']) }}

    </body>
</html>