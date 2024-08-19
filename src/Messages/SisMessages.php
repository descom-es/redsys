<?php

namespace Descom\Redsys\Messages;

class SisMessages
{
    private array $messages = [
        'SIS0001' =>
        [
          'code' => 'SIS0001',
          'response' => 9001,
          'message' => 'Error Interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0002' =>
        [
          'code' => 'SIS0002',
          'response' => 9002,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0003' =>
        [
          'code' => 'SIS0003',
          'response' => 9003,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0004' =>
        [
          'code' => 'SIS0004',
          'response' => 9004,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0005' =>
        [
          'code' => 'SIS0005',
          'response' => 9005,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0006' =>
        [
          'code' => 'SIS0006',
          'response' => 9006,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0007' =>
        [
          'code' => 'SIS0007',
          'response' => 9007,
          'message' => 'El mensaje de petición no es correcto, debe revisar el formato',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0008' =>
        [
          'code' => 'SIS0008',
          'response' => 9008,
          'message' => 'falta Ds_Merchant_MerchantCode',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0009' =>
        [
          'code' => 'SIS0009',
          'response' => 9009,
          'message' => 'Error de formato en Ds_Merchant_MerchantCode',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0010' =>
        [
          'code' => 'SIS0010',
          'response' => 9010,
          'message' => 'Error falta Ds_Merchant_Terminal',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0011' =>
        [
          'code' => 'SIS0011',
          'response' => 9011,
          'message' => 'Error de formato en Ds_Merchant_Terminal',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0012' =>
        [
          'code' => 'SIS0012',
          'response' => 9012,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0013' =>
        [
          'code' => 'SIS0013',
          'response' => 9013,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0014' =>
        [
          'code' => 'SIS0014',
          'response' => 9014,
          'message' => 'Error de formato en Ds_Merchant_Order',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0015' =>
        [
          'code' => 'SIS0015',
          'response' => 9015,
          'message' => 'Error falta Ds_Merchant_Currency',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0016' =>
        [
          'code' => 'SIS0016',
          'response' => 9016,
          'message' => 'Error de formato en Ds_Merchant_Currency',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0018' =>
        [
          'code' => 'SIS0018',
          'response' => 9018,
          'message' => 'Falta Ds_Merchant_Amount',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0019' =>
        [
          'code' => 'SIS0019',
          'response' => 9019,
          'message' => 'Error de formato en Ds_Merchant_Amount',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0020' =>
        [
          'code' => 'SIS0020',
          'response' => 9020,
          'message' => 'Falta Ds_Merchant_MerchantSignature',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0021' =>
        [
          'code' => 'SIS0021',
          'response' => 9021,
          'message' => 'La Ds_Merchant_MerchantSignature viene vacía',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0022' =>
        [
          'code' => 'SIS0022',
          'response' => 9022,
          'message' => 'Error de formato en Ds_Merchant_TransactionType',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0023' =>
        [
          'code' => 'SIS0023',
          'response' => 9023,
          'message' => 'Ds_Merchant_TransactionType desconocido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0024' =>
        [
          'code' => 'SIS0024',
          'response' => 9024,
          'message' => 'El Ds_Merchant_ConsumerLanguage tiene mas de 3 posiciones',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0025' =>
        [
          'code' => 'SIS0025',
          'response' => 9025,
          'message' => 'Error de formato en Ds_Merchant_ConsumerLanguage',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0026' =>
        [
          'code' => 'SIS0026',
          'response' => 9026,
          'message' => 'Problema con la configuración',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0027' =>
        [
          'code' => 'SIS0027',
          'response' => 9027,
          'message' => 'Revisar la moneda que está enviando',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0028' =>
        [
          'code' => 'SIS0028',
          'response' => 9028,
          'message' => 'Error Comercio / terminal está dado de baja',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0029' =>
        [
          'code' => 'SIS0029',
          'response' => 9029,
          'message' => 'Que revise como está montando el mensaje',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0030' =>
        [
          'code' => 'SIS0030',
          'response' => 9030,
          'message' => 'Nos llega un tipo de operación errónea',
          'msg' => 'MSG0000',
          'detail' => '',
        ],
        'SIS0031' =>
        [
          'code' => 'SIS0031',
          'response' => 9031,
          'message' => 'Nos está llegando un método de pago erróneo',
          'msg' => 'MSG0000',
          'detail' => '',
        ],
        'SIS0032' =>
        [
          'code' => 'SIS0032',
          'response' => 9032,
          'message' => 'Revisar como está montando el mensaje para la devolución.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0033' =>
        [
          'code' => 'SIS0033',
          'response' => 9033,
          'message' => 'El tipo de operación es erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0034' =>
        [
          'code' => 'SIS0034',
          'response' => 9034,
          'message' => 'error interno',
          'msg' => 'MSG0000',
          'detail' => '',
        ],
        'SIS0035' =>
        [
          'code' => 'SIS0035',
          'response' => 9035,
          'message' => 'Error interno al recuperar datos de sesión',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0036' =>
        [
          'code' => 'SIS0036',
          'response' => 0,
          'message' => 'Error al tomar los datos para Pago Móvil desde el XML',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0037' =>
        [
          'code' => 'SIS0037',
          'response' => 9037,
          'message' => 'El número de teléfono no es válido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0038' =>
        [
          'code' => 'SIS0038',
          'response' => 9038,
          'message' => 'Error genérico',
          'msg' => 'MSG0000',
          'detail' => '',
        ],
        'SIS0039' =>
        [
          'code' => 'SIS0039',
          'response' => 9039,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0040' =>
        [
          'code' => 'SIS0040',
          'response' => 9040,
          'message' => 'El comercio tiene un error en la configuración, tienen que hablar con su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0041' =>
        [
          'code' => 'SIS0041',
          'response' => 9041,
          'message' => 'Error en el cálculo de la firma',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0042' =>
        [
          'code' => 'SIS0042',
          'response' => 9042,
          'message' => 'Error en el cálculo de la firma',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0043' =>
        [
          'code' => 'SIS0043',
          'response' => 9043,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0044' =>
        [
          'code' => 'SIS0044',
          'response' => 9044,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0045' =>
        [
          'code' => 'SIS0045',
          'response' => 0,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0046' =>
        [
          'code' => 'SIS0046',
          'response' => 9046,
          'message' => 'Problema con la configuración del bin de la tarjeta',
          'msg' => 'MSG0002',
          'detail' => '',
        ],
        'SIS0047' =>
        [
          'code' => 'SIS0047',
          'response' => 9047,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0048' =>
        [
          'code' => 'SIS0048',
          'response' => 9048,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0049' =>
        [
          'code' => 'SIS0049',
          'response' => 9049,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0050' =>
        [
          'code' => 'SIS0050',
          'response' => 9050,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0051' =>
        [
          'code' => 'SIS0051',
          'response' => 9051,
          'message' => 'Error número de pedido repetido',
          'msg' => 'MSG0001',
          'detail' => '',
        ],
        'SIS0052' =>
        [
          'code' => 'SIS0052',
          'response' => 9052,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0053' =>
        [
          'code' => 'SIS0053',
          'response' => 9053,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0054' =>
        [
          'code' => 'SIS0054',
          'response' => 9054,
          'message' => 'No existe operación sobre la que realizar la devolución',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0055' =>
        [
          'code' => 'SIS0055',
          'response' => 9055,
          'message' => 'existe más de un pago con el mismo número de pedido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0056' =>
        [
          'code' => 'SIS0056',
          'response' => 9056,
          'message' => 'Revisar el estado de la autorización',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0057' =>
        [
          'code' => 'SIS0057',
          'response' => 9057,
          'message' => 'Que revise el importe que quiere devolver( supera el permitido)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0058' =>
        [
          'code' => 'SIS0058',
          'response' => 9058,
          'message' => 'Que revise los datos con los que está validando la confirmación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0059' =>
        [
          'code' => 'SIS0059',
          'response' => 9059,
          'message' => 'Revisar que existe esa operación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0060' =>
        [
          'code' => 'SIS0060',
          'response' => 9060,
          'message' => 'Revisar que exista la confirmación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0061' =>
        [
          'code' => 'SIS0061',
          'response' => 9061,
          'message' => 'Revisar el estado de la preautorización',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0062' =>
        [
          'code' => 'SIS0062',
          'response' => 9062,
          'message' => 'Que el comercio revise el importe a confirmar.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0063' =>
        [
          'code' => 'SIS0063',
          'response' => 9063,
          'message' => 'Que el comercio revise el númer de tarjeta que nos están enviando.',
          'msg' => 'MSG0008 ',
          'detail' => '',
        ],
        'SIS0064' =>
        [
          'code' => 'SIS0064',
          'response' => 9064,
          'message' => 'Número de posiciones de la tarjeta incorrecto',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0065' =>
        [
          'code' => 'SIS0065',
          'response' => 9065,
          'message' => 'El número de tarjeta no es numérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0066' =>
        [
          'code' => 'SIS0066',
          'response' => 9066,
          'message' => 'Error mes de caducidad',
          'msg' => 'MSG0008 ',
          'detail' => '',
        ],
        'SIS0067' =>
        [
          'code' => 'SIS0067',
          'response' => 9067,
          'message' => 'El mes de la caducidad no es numérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0068' =>
        [
          'code' => 'SIS0068',
          'response' => 9068,
          'message' => 'El mes de la caducidad no es válido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0069' =>
        [
          'code' => 'SIS0069',
          'response' => 9069,
          'message' => 'Año de caducidad no valido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0070' =>
        [
          'code' => 'SIS0070',
          'response' => 9070,
          'message' => 'El Año de la caducidad no es numérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0071' =>
        [
          'code' => 'SIS0071',
          'response' => 9071,
          'message' => 'Tarjeta caducada',
          'msg' => 'MSG0000',
          'detail' => '',
        ],
        'SIS0072' =>
        [
          'code' => 'SIS0072',
          'response' => 9072,
          'message' => 'Operación no anulable',
          'msg' => 'MSG0000',
          'detail' => '',
        ],
        'SIS0073' =>
        [
          'code' => 'SIS0073',
          'response' => 9073,
          'message' => 'Error en la anulación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0074' =>
        [
          'code' => 'SIS0074',
          'response' => 9074,
          'message' => 'Falta Ds_Merchant_Order ( Pedido )',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0075' =>
        [
          'code' => 'SIS0075',
          'response' => 9075,
          'message' => 'El comercio tiene que revisar cómo está enviando el número de pedido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0077' =>
        [
          'code' => 'SIS0077',
          'response' => 9077,
          'message' => 'El comercio tiene que revisar el número de pedido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0078' =>
        [
          'code' => 'SIS0078',
          'response' => 9078,
          'message' => 'Por la configuración de los métodos de pago de su comercio no se permiten los pagos con esa tarjeta.',
          'msg' => 'MSG0005',
          'detail' => '',
        ],
        'SIS0079' =>
        [
          'code' => 'SIS0079',
          'response' => 9079,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0080' =>
        [
          'code' => 'SIS0080',
          'response' => 9080,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0081' =>
        [
          'code' => 'SIS0081',
          'response' => 9081,
          'message' => 'Se ha perdico los datos de la sesión',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0082' =>
        [
          'code' => 'SIS0082',
          'response' => 9082,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0083' =>
        [
          'code' => 'SIS0083',
          'response' => 9083,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0084' =>
        [
          'code' => 'SIS0084',
          'response' => 9084,
          'message' => 'El valor de Ds_Merchant_Conciliation es nulo.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0085' =>
        [
          'code' => 'SIS0085',
          'response' => 9085,
          'message' => 'El valor de Ds_Merchant_Conciliation no es numérico.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0086' =>
        [
          'code' => 'SIS0086',
          'response' => 9086,
          'message' => 'El valor de Ds_Merchant_Conciliation no ocupa 6 posiciones.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0087' =>
        [
          'code' => 'SIS0087',
          'response' => 9087,
          'message' => 'El valor de Ds_Merchant_Session es nulo.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0088' =>
        [
          'code' => 'SIS0088',
          'response' => 9088,
          'message' => 'El comercio tiene que revisar el valor que envía en ese campo.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0089' =>
        [
          'code' => 'SIS0089',
          'response' => 9089,
          'message' => 'El valor de caducidad no ocupa 4 posiciones.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0090' =>
        [
          'code' => 'SIS0090',
          'response' => 9090,
          'message' => 'Error genérico. Consulte con Soporte.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0091' =>
        [
          'code' => 'SIS0091',
          'response' => 9091,
          'message' => 'Error genérico. Consulte con Soporte.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0092' =>
        [
          'code' => 'SIS0092',
          'response' => 9092,
          'message' => 'Se ha introducido una caducidad incorrecta.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0093' =>
        [
          'code' => 'SIS0093',
          'response' => 9093,
          'message' => 'Denegación emisor',
          'msg' => 'MSG0006',
          'detail' => '',
        ],
        'SIS0094' =>
        [
          'code' => 'SIS0094',
          'response' => 9094,
          'message' => 'Denegación emisor',
          'msg' => 'MSG0004',
          'detail' => '',
        ],
        'SIS0095' =>
        [
          'code' => 'SIS0095',
          'response' => 9095,
          'message' => 'Denegación emisor',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0096' =>
        [
          'code' => 'SIS0096',
          'response' => 9096,
          'message' => 'El formato utilizado para los datos 3DSecure es incorrecto',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0097' =>
        [
          'code' => 'SIS0097',
          'response' => 9097,
          'message' => 'Valor del campo Ds_Merchant_CComercio no válido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0098' =>
        [
          'code' => 'SIS0098',
          'response' => 9098,
          'message' => 'Valor del campo Ds_Merchant_CVentana no válido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0099' =>
        [
          'code' => 'SIS0099',
          'response' => 9099,
          'message' => 'Error al interpretar respuesta de autenticación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0103' =>
        [
          'code' => 'SIS0103',
          'response' => 9103,
          'message' => 'Error al montar la petición de Autenticación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0104' =>
        [
          'code' => 'SIS0104',
          'response' => 9104,
          'message' => 'Comercio con “titular seguro” y titular sin clave de compra segura',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0112' =>
        [
          'code' => 'SIS0112',
          'response' => 9112,
          'message' => 'Que revise que está enviando en el campo Ds_Merchant_Transacction_Type.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0113' =>
        [
          'code' => 'SIS0113',
          'response' => 9113,
          'message' => 'Error interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0114' =>
        [
          'code' => 'SIS0114',
          'response' => 9114,
          'message' => 'Se está realizando la llamada por GET, la tiene que realizar por POST',
          'msg' => 'MSG0000',
          'detail' => '',
        ],
        'SIS0115' =>
        [
          'code' => 'SIS0115',
          'response' => 9115,
          'message' => 'Que revise los datos de la operación que nos está enviando',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0116' =>
        [
          'code' => 'SIS0116',
          'response' => 9116,
          'message' => 'La operación sobre la que se desea pagar una cuota no es una operación válida',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0117' =>
        [
          'code' => 'SIS0117',
          'response' => 9117,
          'message' => 'La operación sobre la que se desea pagar una cuota no está autorizada',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0118' =>
        [
          'code' => 'SIS0118',
          'response' => 9118,
          'message' => 'Se ha excedido el importe total de las cuotas',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0119' =>
        [
          'code' => 'SIS0119',
          'response' => 9119,
          'message' => 'Valor del campo Ds_Merchant_DateFrecuency no válido ( Pagos recurrentes)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0120' =>
        [
          'code' => 'SIS0120',
          'response' => 9120,
          'message' => 'Valor del campo Ds_Merchant_ChargeExpiryDate no válido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0121' =>
        [
          'code' => 'SIS0121',
          'response' => 9121,
          'message' => 'Valor del campo Ds_Merchant_SumTotal no válido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0122' =>
        [
          'code' => 'SIS0122',
          'response' => 9122,
          'message' => 'Formato incorrecto del campo Ds_Merchant_DateFrecuency o Ds_Merchant_SumTotal',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0123' =>
        [
          'code' => 'SIS0123',
          'response' => 9123,
          'message' => 'Se ha excedido la fecha tope para realiza la Transacción',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0124' =>
        [
          'code' => 'SIS0124',
          'response' => 9124,
          'message' => 'No ha transcurrido la frecuencia mínima en un pago recurrente sucesivo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0125' =>
        [
          'code' => 'SIS0125',
          'response' => 9125,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0126' =>
        [
          'code' => 'SIS0126',
          'response' => 9126,
          'message' => 'Operación Duplicada',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0127' =>
        [
          'code' => 'SIS0127',
          'response' => 9127,
          'message' => 'Error Interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0128' =>
        [
          'code' => 'SIS0128',
          'response' => 9128,
          'message' => 'Error interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0129' =>
        [
          'code' => 'SIS0129',
          'response' => 9129,
          'message' => 'Error, se ha detectado un intento masivo de peticiones desde la ip',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0130' =>
        [
          'code' => 'SIS0130',
          'response' => 9130,
          'message' => 'Error Interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0131' =>
        [
          'code' => 'SIS0131',
          'response' => 9131,
          'message' => 'Error Interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0132' =>
        [
          'code' => 'SIS0132',
          'response' => 9132,
          'message' => 'La fecha de Confirmación de Autorización no puede superar en mas de 7 dias a la de Preautorización.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0133' =>
        [
          'code' => 'SIS0133',
          'response' => 9133,
          'message' => 'La fecha de Confirmación de Autenticación no puede superar en mas de 45 días a la de Autenticacion Previa que el comercio revise la fecha de la Preautenticación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0134' =>
        [
          'code' => 'SIS0134',
          'response' => 9134,
          'message' => 'El valor del Ds_MerchantCiers enviado no es válido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0135' =>
        [
          'code' => 'SIS0135',
          'response' => 9135,
          'message' => 'Error generando un nuevo valor para el IDETRA',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0136' =>
        [
          'code' => 'SIS0136',
          'response' => 9136,
          'message' => 'Error al montar el mensaje de notificación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0137' =>
        [
          'code' => 'SIS0137',
          'response' => 9137,
          'message' => 'Error al intentar validar la tarjeta como 3DSecure NACIONAL',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0138' =>
        [
          'code' => 'SIS0138',
          'response' => 9138,
          'message' => 'Error debido a que existe una Regla del ficheros de reglas que evita que se produzca la Autorizacion',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0139' =>
        [
          'code' => 'SIS0139',
          'response' => 9139,
          'message' => 'pago recurrente inicial está duplicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0140' =>
        [
          'code' => 'SIS0140',
          'response' => 9140,
          'message' => 'Error Interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0141' =>
        [
          'code' => 'SIS0141',
          'response' => 9141,
          'message' => 'Error formato no correcto para 3DSecure',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0142' =>
        [
          'code' => 'SIS0142',
          'response' => 9142,
          'message' => 'Tiempo excecido para el pago',
          'msg' => 'MSG0000',
          'detail' => '',
        ],
        'SIS0151' =>
        [
          'code' => 'SIS0151',
          'response' => 9151,
          'message' => 'Error Interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0169' =>
        [
          'code' => 'SIS0169',
          'response' => 9169,
          'message' => 'El valor del campo Ds_Merchant_MatchingData ( Datos de Case) no es valido , que lo revise',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0170' =>
        [
          'code' => 'SIS0170',
          'response' => 9170,
          'message' => 'Que revise el adquirente que manda en el campo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0171' =>
        [
          'code' => 'SIS0171',
          'response' => 9171,
          'message' => 'Que revise el CSB que nos está enviando',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0172' =>
        [
          'code' => 'SIS0172',
          'response' => 9172,
          'message' => 'El valor del campo PUCE Ds_Merchant_MerchantCode no es válido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0173' =>
        [
          'code' => 'SIS0173',
          'response' => 9173,
          'message' => 'Que el comercio revise el campo de la URL OK',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0174' =>
        [
          'code' => 'SIS0174',
          'response' => 9174,
          'message' => 'Error Interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0175' =>
        [
          'code' => 'SIS0175',
          'response' => 9175,
          'message' => 'Error Interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0181' =>
        [
          'code' => 'SIS0181',
          'response' => 9181,
          'message' => 'Error Interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0182' =>
        [
          'code' => 'SIS0182',
          'response' => 9182,
          'message' => 'Error Interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0183' =>
        [
          'code' => 'SIS0183',
          'response' => 9183,
          'message' => 'Error interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0184' =>
        [
          'code' => 'SIS0184',
          'response' => 9184,
          'message' => 'Error interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0186' =>
        [
          'code' => 'SIS0186',
          'response' => 9186,
          'message' => 'Faltan datos para operación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0187' =>
        [
          'code' => 'SIS0187',
          'response' => 9187,
          'message' => 'Error formato( Interno )',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0197' =>
        [
          'code' => 'SIS0197',
          'response' => 9197,
          'message' => 'Error al obtener los datos de cesta de la compra',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0214' =>
        [
          'code' => 'SIS0214',
          'response' => 9214,
          'message' => 'Su comercion no permite devoluciones por el tipo de firma ( Completo)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0216' =>
        [
          'code' => 'SIS0216',
          'response' => 9216,
          'message' => 'El CVV2 tiene mas de 3 posiciones',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0217' =>
        [
          'code' => 'SIS0217',
          'response' => 9217,
          'message' => 'Error de formato en el CVV2',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0218' =>
        [
          'code' => 'SIS0218',
          'response' => 9218,
          'message' => 'El comercio no permite operaciones seguras por las entradas "operaciones" o "WebService"',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0219' =>
        [
          'code' => 'SIS0219',
          'response' => 9219,
          'message' => 'Se tiene que dirigir a su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0220' =>
        [
          'code' => 'SIS0220',
          'response' => 9220,
          'message' => 'Se tiene que dirigir a su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0221' =>
        [
          'code' => 'SIS0221',
          'response' => 9221,
          'message' => 'El cliente no está introduciendo el CVV2',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0222' =>
        [
          'code' => 'SIS0222',
          'response' => 9222,
          'message' => 'Existe una anulación asociada a la preautorización',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0223' =>
        [
          'code' => 'SIS0223',
          'response' => 9223,
          'message' => 'La preautorización que se desea anular no está autorizada',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0224' =>
        [
          'code' => 'SIS0224',
          'response' => 9224,
          'message' => 'Su comercio no permite anulaciones por no tener la firma ampliada',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0225' =>
        [
          'code' => 'SIS0225',
          'response' => 9225,
          'message' => 'No existe operación sobre la que realizar la anulación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0226' =>
        [
          'code' => 'SIS0226',
          'response' => 9226,
          'message' => 'Error en en los datos de la anulación manual',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0227' =>
        [
          'code' => 'SIS0227',
          'response' => 9227,
          'message' => 'Que el comercio revise el campo Ds_Merchant_TransactionDate',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0228' =>
        [
          'code' => 'SIS0228',
          'response' => 9228,
          'message' => 'El tipo de tarjeta no puede realizar pago aplazado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0229' =>
        [
          'code' => 'SIS0229',
          'response' => 9229,
          'message' => 'Error con el codigo de aplazamiento',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0230' =>
        [
          'code' => 'SIS0230',
          'response' => 9230,
          'message' => 'Su comercio no permite pago fraccionado( Consulte a su entidad)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0231' =>
        [
          'code' => 'SIS0231',
          'response' => 9231,
          'message' => 'No hay forma de pago aplicable ( Consulte con su entidad)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0232' =>
        [
          'code' => 'SIS0232',
          'response' => 9232,
          'message' => 'Forma de pago no disponible',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0233' =>
        [
          'code' => 'SIS0233',
          'response' => 9233,
          'message' => 'Forma de pago desconocida',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0234' =>
        [
          'code' => 'SIS0234',
          'response' => 9234,
          'message' => 'Nombre del titular de la cuenta no disponible',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0235' =>
        [
          'code' => 'SIS0235',
          'response' => 9235,
          'message' => 'Campo Sis_Numero_Entidad no disponible',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0236' =>
        [
          'code' => 'SIS0236',
          'response' => 9236,
          'message' => 'El campo Sis_Numero_Entidad no tiene la longitud requerida',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0237' =>
        [
          'code' => 'SIS0237',
          'response' => 9237,
          'message' => 'El campo Sis_Numero_Entidad no es numérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0238' =>
        [
          'code' => 'SIS0238',
          'response' => 9238,
          'message' => 'Campo Sis_Numero_Oficina no disponible',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0239' =>
        [
          'code' => 'SIS0239',
          'response' => 9239,
          'message' => 'El campo Sis_Numero_Oficina no tiene la longitud requerida',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0240' =>
        [
          'code' => 'SIS0240',
          'response' => 9240,
          'message' => 'El campo Sis_Numero_Oficina no es numérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0241' =>
        [
          'code' => 'SIS0241',
          'response' => 9241,
          'message' => 'Campo Sis_Numero_DC no disponible',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0242' =>
        [
          'code' => 'SIS0242',
          'response' => 9242,
          'message' => 'El campo Sis_Numero_DC no tiene la longitud requerida',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0243' =>
        [
          'code' => 'SIS0243',
          'response' => 9243,
          'message' => 'El campo Sis_Numero_DC no es numérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0244' =>
        [
          'code' => 'SIS0244',
          'response' => 9244,
          'message' => 'Campo Sis_Numero_Cuenta no disponible',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0245' =>
        [
          'code' => 'SIS0245',
          'response' => 9245,
          'message' => 'El campo Sis_Numero_Cuenta no tiene la longitud requerida',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0246' =>
        [
          'code' => 'SIS0246',
          'response' => 9246,
          'message' => 'El campo Sis_Numero_Cuenta no es numérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0247' =>
        [
          'code' => 'SIS0247',
          'response' => 9247,
          'message' => 'Dígito de Control de Cuenta Cliente no válido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0248' =>
        [
          'code' => 'SIS0248',
          'response' => 9248,
          'message' => 'El comercio no permite pago por domiciliación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0249' =>
        [
          'code' => 'SIS0249',
          'response' => 9249,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0250' =>
        [
          'code' => 'SIS0250',
          'response' => 9250,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0251' =>
        [
          'code' => 'SIS0251',
          'response' => 9251,
          'message' => 'No permite transferencias( Consultar con entidad )',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0252' =>
        [
          'code' => 'SIS0252',
          'response' => 9252,
          'message' => 'Por su configuración no puede enviar la tarjeta. ( Para modificarlo consualtar con la entidad)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0253' =>
        [
          'code' => 'SIS0253',
          'response' => 9253,
          'message' => 'No se ha tecleado correctamente la tarjeta.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0254' =>
        [
          'code' => 'SIS0254',
          'response' => 9254,
          'message' => 'Se tiene que dirigir a su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0255' =>
        [
          'code' => 'SIS0255',
          'response' => 9255,
          'message' => 'Se tiene que dirigir a su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0256' =>
        [
          'code' => 'SIS0256',
          'response' => 9256,
          'message' => 'El comercio no permite operativa de preautorizacion.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0257' =>
        [
          'code' => 'SIS0257',
          'response' => 9257,
          'message' => 'La tarjeta no permite operativa de preautorizacion',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0258' =>
        [
          'code' => 'SIS0258',
          'response' => 9258,
          'message' => 'Tienen que revisar los datos de la validación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0259' =>
        [
          'code' => 'SIS0259',
          'response' => 9259,
          'message' => 'No existe la operacion original para notificar o consultar',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0260' =>
        [
          'code' => 'SIS0260',
          'response' => 9260,
          'message' => 'Entrada incorrecta al SIS',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0261' =>
        [
          'code' => 'SIS0261',
          'response' => 9261,
          'message' => 'Se tiene que dirigir a su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0262' =>
        [
          'code' => 'SIS0262',
          'response' => 9262,
          'message' => 'Moneda no permitida para operación de transferencia o domiciliacion',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0263' =>
        [
          'code' => 'SIS0263',
          'response' => 9263,
          'message' => 'Error calculando datos para procesar operación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0264' =>
        [
          'code' => 'SIS0264',
          'response' => 9264,
          'message' => 'Error procesando datos de respuesta recibidos',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS02648' =>
        [
          'code' => 'SIS02648',
          'response' => 9268,
          'message' => 'La devolución no se puede procesar por WebService',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0265' =>
        [
          'code' => 'SIS0265',
          'response' => 9265,
          'message' => 'Error de firma en los datos recibidos',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0266' =>
        [
          'code' => 'SIS0266',
          'response' => 9266,
          'message' => 'No se pueden recuperar los datos de la operación recibida',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0267' =>
        [
          'code' => 'SIS0267',
          'response' => 9267,
          'message' => 'La operación no se puede procesar por no existir Codigo Cuenta Cliente',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0269' =>
        [
          'code' => 'SIS0269',
          'response' => 9269,
          'message' => 'No se pueden realizar devoluciones de operaciones de domiciliacion no descargadas',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0270' =>
        [
          'code' => 'SIS0270',
          'response' => 9270,
          'message' => 'El comercio no puede realizar preautorizaciones en diferido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0274' =>
        [
          'code' => 'SIS0274',
          'response' => 9274,
          'message' => 'Tipo de operación desconocida o no permitida por esta entrada al SIS',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0275' =>
        [
          'code' => 'SIS0275',
          'response' => 9275,
          'message' => 'Premio sin IdPremio',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0277' =>
        [
          'code' => 'SIS0277',
          'response' => 9277,
          'message' => 'Error genérico. Consulte con Redsys',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0278' =>
        [
          'code' => 'SIS0278',
          'response' => 9278,
          'message' => 'Error en el proceso de consulta de premios',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0279' =>
        [
          'code' => 'SIS0279',
          'response' => 9279,
          'message' => 'El comercio no tiene activada la operativa de fidelización',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0280' =>
        [
          'code' => 'SIS0280',
          'response' => 9280,
          'message' => 'Se tiene que dirigir a su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0281' =>
        [
          'code' => 'SIS0281',
          'response' => 9281,
          'message' => 'Se tiene que dirigir a su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0282' =>
        [
          'code' => 'SIS0282',
          'response' => 9282,
          'message' => 'Se tiene que dirigir a su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0283' =>
        [
          'code' => 'SIS0283',
          'response' => 9283,
          'message' => 'Se tiene que dirigir a su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0284' =>
        [
          'code' => 'SIS0284',
          'response' => 9284,
          'message' => 'No existe operacion sobre la que realizar el Pago Adicional',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0285' =>
        [
          'code' => 'SIS0285',
          'response' => 9285,
          'message' => 'Tiene más de una operacion sobre la que realizar el Pago Adicional',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0286' =>
        [
          'code' => 'SIS0286',
          'response' => 9286,
          'message' => 'La operación sobre la que se quiere hacer la operación adicional no esta Aceptada',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0287' =>
        [
          'code' => 'SIS0287',
          'response' => 9287,
          'message' => 'la Operacion ha sobrepasado el importe para el Pago Adicional.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0288' =>
        [
          'code' => 'SIS0288',
          'response' => 9288,
          'message' => 'No se puede realizar otro pago Adicional. se ha superado el numero de pagos',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0289' =>
        [
          'code' => 'SIS0289',
          'response' => 9289,
          'message' => 'El importe del pago Adicional supera el maximo días permitido.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0290' =>
        [
          'code' => 'SIS0290',
          'response' => 9290,
          'message' => 'Se tiene que dirigir a su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0291' =>
        [
          'code' => 'SIS0291',
          'response' => 9291,
          'message' => 'Se tiene que dirigir a su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0292' =>
        [
          'code' => 'SIS0292',
          'response' => 9292,
          'message' => 'Se tiene que dirigir a su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0293' =>
        [
          'code' => 'SIS0293',
          'response' => 9293,
          'message' => 'Se tiene que dirigir a su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0294' =>
        [
          'code' => 'SIS0294',
          'response' => 9294,
          'message' => 'La tarjeta no es privada.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0295' =>
        [
          'code' => 'SIS0295',
          'response' => 9295,
          'message' => 'duplicidad de operación. Se puede intentar de nuevo ( 1 minuto )',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0296' =>
        [
          'code' => 'SIS0296',
          'response' => 9296,
          'message' => 'No se encuentra la operación Tarjeta en Archivo inicial',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0297' =>
        [
          'code' => 'SIS0297',
          'response' => 9297,
          'message' => 'Número de operaciones sucesivas de Tarjeta en Archivo superado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0298' =>
        [
          'code' => 'SIS0298',
          'response' => 9298,
          'message' => 'No puede realizar este tipo de operativa. (Contacte con su entidad)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0299' =>
        [
          'code' => 'SIS0299',
          'response' => 9299,
          'message' => 'Error en pago con PayPal',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0300' =>
        [
          'code' => 'SIS0300',
          'response' => 9300,
          'message' => 'Error en pago con PayPal',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0301' =>
        [
          'code' => 'SIS0301',
          'response' => 9301,
          'message' => 'Error en pago con PayPal',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0302' =>
        [
          'code' => 'SIS0302',
          'response' => 9302,
          'message' => 'Moneda no válida para pago con PayPal',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0304' =>
        [
          'code' => 'SIS0304',
          'response' => 9304,
          'message' => 'No se permite pago fraccionado si la tarjeta no es de FINCONSUM',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0305' =>
        [
          'code' => 'SIS0305',
          'response' => 9305,
          'message' => 'Revisar la moneda de la operación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0306' =>
        [
          'code' => 'SIS0306',
          'response' => 9306,
          'message' => 'Valor de Ds_Merchant_PrepaidCard no válido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0307' =>
        [
          'code' => 'SIS0307',
          'response' => 9307,
          'message' => 'Que consulte con su entidad. Operativa de tarjeta regalo no permitida',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0308' =>
        [
          'code' => 'SIS0308',
          'response' => 9308,
          'message' => 'Tiempo límite para recarga de tarjeta regalo superado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0309' =>
        [
          'code' => 'SIS0309',
          'response' => 9309,
          'message' => 'Faltan datos adicionales para realizar la recarga de tarjeta prepago',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0310' =>
        [
          'code' => 'SIS0310',
          'response' => 9310,
          'message' => 'Valor de Ds_Merchant_Prepaid_Expiry no válido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0311' =>
        [
          'code' => 'SIS0311',
          'response' => 9311,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0319' =>
        [
          'code' => 'SIS0319',
          'response' => 9319,
          'message' => 'El comercio no pertenece al grupo especificado en Ds_Merchant_Group',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0320' =>
        [
          'code' => 'SIS0320',
          'response' => 9320,
          'message' => 'Error generando la referencia',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0321' =>
        [
          'code' => 'SIS0321',
          'response' => 9321,
          'message' => 'El identificador no está asociado al comercio',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0322' =>
        [
          'code' => 'SIS0322',
          'response' => 9322,
          'message' => 'Que revise el formato del grupo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0323' =>
        [
          'code' => 'SIS0323',
          'response' => 9323,
          'message' => 'Para el tipo de operación F( pago en dos fases) es necesario enviar uno de estos campos. Ds_Merchant_Customer_Mobile o Ds_Merchant_Customer_Mail',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0324' =>
        [
          'code' => 'SIS0324',
          'response' => 9324,
          'message' => 'Imposible enviar el link al cliente( Que revise la dirección mail)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0326' =>
        [
          'code' => 'SIS0326',
          'response' => 9326,
          'message' => 'Se han enviado datos de tarjeta en fase primera de un pago con dos fases',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0327' =>
        [
          'code' => 'SIS0327',
          'response' => 9327,
          'message' => 'No se ha enviado ni móvil ni email en fase primera de un pago con dos fases',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0328' =>
        [
          'code' => 'SIS0328',
          'response' => 9328,
          'message' => 'Token de pago en dos fases inválido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0329' =>
        [
          'code' => 'SIS0329',
          'response' => 9329,
          'message' => 'No se puede recuperar el Token de pago en dos fases.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0330' =>
        [
          'code' => 'SIS0330',
          'response' => 9330,
          'message' => 'Fechas incorrectas de pago dos fases',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0331' =>
        [
          'code' => 'SIS0331',
          'response' => 9331,
          'message' => 'La operación no tiene un estado válido o no existe.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0332' =>
        [
          'code' => 'SIS0332',
          'response' => 9332,
          'message' => 'El importe de la operación original y de la devolución debe ser idéntico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0333' =>
        [
          'code' => 'SIS0333',
          'response' => 9333,
          'message' => 'Error en una petición a MasterPass Wallet',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0334' =>
        [
          'code' => 'SIS0334',
          'response' => 9283,
          'message' => 'Se tiene que dirigir a su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0335' =>
        [
          'code' => 'SIS0335',
          'response' => 9335,
          'message' => 'El valor del campo Ds_Merchant_Recharge_Commission no es válido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0336' =>
        [
          'code' => 'SIS0336',
          'response' => 9336,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0337' =>
        [
          'code' => 'SIS0337',
          'response' => 9337,
          'message' => 'Error interno (iUPAY)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0338' =>
        [
          'code' => 'SIS0338',
          'response' => 9338,
          'message' => 'No se encuentra la operación iUPAY',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0339' =>
        [
          'code' => 'SIS0339',
          'response' => 9339,
          'message' => 'El comercio no dispone de pago iUPAY ( Consulte a su entidad)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0340' =>
        [
          'code' => 'SIS0340',
          'response' => 9340,
          'message' => 'Respuesta recibida desde iUPAY no válida',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0341' =>
        [
          'code' => 'SIS0341',
          'response' => 9341,
          'message' => 'Error interno (iUPAY)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0342' =>
        [
          'code' => 'SIS0342',
          'response' => 9342,
          'message' => 'El comercio no permite realizar operaciones de pago de tributos',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0343' =>
        [
          'code' => 'SIS0343',
          'response' => 9343,
          'message' => 'Falta o es incorrecto el parámetro Ds_Merchant_Tax_Reference',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0344' =>
        [
          'code' => 'SIS0344',
          'response' => 9344,
          'message' => 'El usuario ha elegido aplazar el pago, pero no ha aceptado las condiciones de las cuotas',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0345' =>
        [
          'code' => 'SIS0345',
          'response' => 9345,
          'message' => 'Revisar el número de plazos que está enviando.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0346' =>
        [
          'code' => 'SIS0346',
          'response' => 9346,
          'message' => 'Revisar formato en parámetro DS_MERCHANT_PAY_TYPE',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0347' =>
        [
          'code' => 'SIS0347',
          'response' => 9347,
          'message' => 'El comercio no está configurado para realizar la consulta de BIN.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0348' =>
        [
          'code' => 'SIS0348',
          'response' => 9348,
          'message' => 'El BIN indicado en la consulta no se reconoce',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0349' =>
        [
          'code' => 'SIS0349',
          'response' => 9349,
          'message' => 'Los datos de importe y DCC enviados no coinciden con los registrados en SIS',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0350' =>
        [
          'code' => 'SIS0350',
          'response' => 9350,
          'message' => 'No hay datos DCC registrados en SIS para este número de pedido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0351' =>
        [
          'code' => 'SIS0351',
          'response' => 9351,
          'message' => 'Autenticación prepago incorrecta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0352' =>
        [
          'code' => 'SIS0352',
          'response' => 9352,
          'message' => 'El tipo de firma no permite esta operativa',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0353' =>
        [
          'code' => 'SIS0353',
          'response' => 9353,
          'message' => 'Clave no válida',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0354' =>
        [
          'code' => 'SIS0354',
          'response' => 9354,
          'message' => 'Error descifrando petición al SIS',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0355' =>
        [
          'code' => 'SIS0355',
          'response' => 9355,
          'message' => 'El comercio-terminal enviado en los datos cifrados no coincide con el enviado en la petición',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0356' =>
        [
          'code' => 'SIS0356',
          'response' => 9356,
          'message' => 'El comercio no tiene activo control de fraude ( Consulte con su entidad',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0357' =>
        [
          'code' => 'SIS0357',
          'response' => 9357,
          'message' => 'El comercio tiene activo control de fraude y no existe campo ds_merchant_merchantscf',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0358' =>
        [
          'code' => 'SIS0358',
          'response' => 9358,
          'message' => 'No dispone de pago iUPAY',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0359' =>
        [
          'code' => 'SIS0359',
          'response' => 9359,
          'message' => 'El comercio solamente permite pago de tributos y no se está informando el campo Ds_Merchant_TaxReference',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0370' =>
        [
          'code' => 'SIS0370',
          'response' => 9370,
          'message' => 'Error en formato Scf_Merchant_Nif. Longitud máxima 16',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0371' =>
        [
          'code' => 'SIS0371',
          'response' => 9371,
          'message' => 'Error en formato Scf_Merchant_Name. Longitud máxima 30',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0372' =>
        [
          'code' => 'SIS0372',
          'response' => 9372,
          'message' => 'Error en formato Scf_Merchant_First_Name. Longitud máxima 30',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0373' =>
        [
          'code' => 'SIS0373',
          'response' => 9373,
          'message' => 'Error en formato Scf_Merchant_Last_Name. Longitud máxima 30',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0374' =>
        [
          'code' => 'SIS0374',
          'response' => 9374,
          'message' => 'Error en formato Scf_Merchant_User. Longitud máxima 45',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0375' =>
        [
          'code' => 'SIS0375',
          'response' => 9375,
          'message' => 'Error en formato Scf_Affinity_Card. Valores posibles \'S\' o \'N\'. Longitud máxima 1',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0376' =>
        [
          'code' => 'SIS0376',
          'response' => 9376,
          'message' => 'Error en formato Scf_Payment_Financed. Valores posibles \'S\' o \'N\'. Longitud máxima 1',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0377' =>
        [
          'code' => 'SIS0377',
          'response' => 9377,
          'message' => 'Error en formato Scf_Ticket_Departure_Point. Longitud máxima 30',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0378' =>
        [
          'code' => 'SIS0378',
          'response' => 9378,
          'message' => 'Error en formato Scf_Ticket_Destination. Longitud máxima 30',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0379' =>
        [
          'code' => 'SIS0379',
          'response' => 9379,
          'message' => 'Error en formato Scf_Ticket_Departure_Date. Debe tener formato yyyyMMddHHmmss.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0380' =>
        [
          'code' => 'SIS0380',
          'response' => 9380,
          'message' => 'Error en formato Scf_Ticket_Num_Passengers. Longitud máxima 1.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0381' =>
        [
          'code' => 'SIS0381',
          'response' => 9381,
          'message' => 'Error en formato Scf_Passenger_Dni. Longitud máxima 16.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0382' =>
        [
          'code' => 'SIS0382',
          'response' => 9382,
          'message' => 'Error en formato Scf_Passenger_Name. Longitud máxima 30.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0383' =>
        [
          'code' => 'SIS0383',
          'response' => 9383,
          'message' => 'Error en formato Scf_Passenger_First_Name. Longitud máxima 30.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0384' =>
        [
          'code' => 'SIS0384',
          'response' => 9384,
          'message' => 'Error en formato Scf_Passenger_Last_Name. Longitud máxima 30.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0385' =>
        [
          'code' => 'SIS0385',
          'response' => 9385,
          'message' => 'Error en formato Scf_Passenger_Check_Luggage. Valores posibles \'S\' o \'N\'. Longitud máxima 1.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0386' =>
        [
          'code' => 'SIS0386',
          'response' => 9386,
          'message' => 'Error en formato Scf_Passenger_Special_luggage. Valores posibles \'S\' o \'N\'. Longitud máxima 1.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0387' =>
        [
          'code' => 'SIS0387',
          'response' => 9387,
          'message' => 'Error en formato Scf_Passenger_Insurance_Trip. Valores posibles \'S\' o \'N\'. Longitud máxima 1.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0388' =>
        [
          'code' => 'SIS0388',
          'response' => 9388,
          'message' => 'Error en formato Scf_Passenger_Type_Trip. Valores posibles \'N\' o \'I\'. Longitud máxima 1.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0389' =>
        [
          'code' => 'SIS0389',
          'response' => 9389,
          'message' => 'Error en formato Scf_Passenger_Pet. Valores posibles \'S\' o \'N\'. Longitud máxima 1.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0390' =>
        [
          'code' => 'SIS0390',
          'response' => 9390,
          'message' => 'Error en formato Scf_Order_Channel. Valores posibles \'M\'(móvil], \'P\'(PC) o \'T\'(Tablet)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0391' =>
        [
          'code' => 'SIS0391',
          'response' => 9391,
          'message' => 'Error en formato Scf_Order_Total_Products. Debe tener formato numérico y longitud máxima de 3.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0392' =>
        [
          'code' => 'SIS0392',
          'response' => 9392,
          'message' => 'Error en formato Scf_Order_Different_Products. Debe tener formato numérico y longitud máxima de 3.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0393' =>
        [
          'code' => 'SIS0393',
          'response' => 9393,
          'message' => 'Error en formato Scf_Order_Amount. Debe tener formato numérico y longitud máxima de 19.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0394' =>
        [
          'code' => 'SIS0394',
          'response' => 9394,
          'message' => 'Error en formato Scf_Order_Max_Amount. Debe tener formato numérico y longitud máxima de 19.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0395' =>
        [
          'code' => 'SIS0395',
          'response' => 9395,
          'message' => 'Error en formato Scf_Order_Coupon. Valores posibles \'S\' o \'N\'',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0396' =>
        [
          'code' => 'SIS0396',
          'response' => 9396,
          'message' => 'Error en formato Scf_Order_Show_Type. Debe longitud máxima de 30.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0397' =>
        [
          'code' => 'SIS0397',
          'response' => 9397,
          'message' => 'Error en formato Scf_Wallet_Identifier',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0398' =>
        [
          'code' => 'SIS0398',
          'response' => 9398,
          'message' => 'Error en formato Scf_Wallet_Client_Identifier',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0399' =>
        [
          'code' => 'SIS0399',
          'response' => 9399,
          'message' => 'Error en formato Scf_Merchant_Ip_Address',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0400' =>
        [
          'code' => 'SIS0400',
          'response' => 9400,
          'message' => 'Error en formato Scf_Merchant_Proxy',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0401' =>
        [
          'code' => 'SIS0401',
          'response' => 9401,
          'message' => 'Error en formato Ds_Merchant_Mail_Phone_Number. Debe ser numérico y de longitud máxima 19',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0402' =>
        [
          'code' => 'SIS0402',
          'response' => 9402,
          'message' => 'Error en llamada a SafetyPay para solicitar token url',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0403' =>
        [
          'code' => 'SIS0403',
          'response' => 9403,
          'message' => 'Error en proceso de solicitud de token url a SafetyPay',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0404' =>
        [
          'code' => 'SIS0404',
          'response' => 9404,
          'message' => 'Error en una petición a SafetyPay',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0405' =>
        [
          'code' => 'SIS0405',
          'response' => 9405,
          'message' => 'Solicitud de token url denegada SAFETYPAY',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0406' =>
        [
          'code' => 'SIS0406',
          'response' => 9406,
          'message' => 'Se tiene que poner en contacto con su entidad para que revisen la configuración del sector de actividad de su comercio',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0407' =>
        [
          'code' => 'SIS0407',
          'response' => 9407,
          'message' => 'El importe de la operación supera el máximo permitido para realizar un pago de premio de apuesta(Gambling)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0408' =>
        [
          'code' => 'SIS0408',
          'response' => 9408,
          'message' => 'La tarjeta debe de haber operado durante el último año para poder realizar un pago de premio de apuesta (Gambling)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0409' =>
        [
          'code' => 'SIS0409',
          'response' => 9409,
          'message' => 'La tarjeta debe ser una Visa o MasterCard nacional para realizar un pago de premio de apuesta (Gambling)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0410' =>
        [
          'code' => 'SIS0410',
          'response' => 9410,
          'message' => 'Denegada por el emisor',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0411' =>
        [
          'code' => 'SIS0411',
          'response' => 9411,
          'message' => 'Error en la configuración del comercio (Remitir a su entidad)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0412' =>
        [
          'code' => 'SIS0412',
          'response' => 9412,
          'message' => 'La firma no es correcta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0413' =>
        [
          'code' => 'SIS0413',
          'response' => 9413,
          'message' => 'Denegada, consulte con su entidad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0414' =>
        [
          'code' => 'SIS0414',
          'response' => 9414,
          'message' => 'El plan de ventas no es correcto',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0415' =>
        [
          'code' => 'SIS0415',
          'response' => 9415,
          'message' => 'El tipo de producto no es correcto',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0416' =>
        [
          'code' => 'SIS0416',
          'response' => 9416,
          'message' => 'Importe no permitido en devolucion',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0417' =>
        [
          'code' => 'SIS0417',
          'response' => 9417,
          'message' => 'Fecha de devolucion no permitida',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0418' =>
        [
          'code' => 'SIS0418',
          'response' => 9418,
          'message' => 'No existe plan de ventas vigente',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0419' =>
        [
          'code' => 'SIS0419',
          'response' => 9419,
          'message' => 'Tipo de cuenta no permitida',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0420' =>
        [
          'code' => 'SIS0420',
          'response' => 9420,
          'message' => 'El comercio no dispone de formas de pago para esta operación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0421' =>
        [
          'code' => 'SIS0421',
          'response' => 9421,
          'message' => 'Tarjeta no permitida. No es producto Agro',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0422' =>
        [
          'code' => 'SIS0422',
          'response' => 9422,
          'message' => 'Faltan datos para operacion Agro',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0423' =>
        [
          'code' => 'SIS0423',
          'response' => 9423,
          'message' => 'CNPJ del comecio incorrecto',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0424' =>
        [
          'code' => 'SIS0424',
          'response' => 9424,
          'message' => 'No se ha encontrado el establecimiento',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0425' =>
        [
          'code' => 'SIS0425',
          'response' => 9425,
          'message' => 'No se ha encontrado la tarjeta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0426' =>
        [
          'code' => 'SIS0426',
          'response' => 9426,
          'message' => 'Enrutamiento no valido para el comercio',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0427' =>
        [
          'code' => 'SIS0427',
          'response' => 9427,
          'message' => 'La conexion con CECA no ha sido posible',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0428' =>
        [
          'code' => 'SIS0428',
          'response' => 9428,
          'message' => 'Operacion debito no segura',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0429' =>
        [
          'code' => 'SIS0429',
          'response' => 9429,
          'message' => 'Error en la versión enviada por el comercio (Ds_SignatureVersion)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0430' =>
        [
          'code' => 'SIS0430',
          'response' => 9430,
          'message' => 'Error al decodificar el parámetro Ds_MerchantParameters',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0431' =>
        [
          'code' => 'SIS0431',
          'response' => 9431,
          'message' => 'Error del objeto JSON que se envía codificado en el parámetro Ds_MerchantParameters',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0432' =>
        [
          'code' => 'SIS0432',
          'response' => 9432,
          'message' => 'Error FUC del comercio erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0433' =>
        [
          'code' => 'SIS0433',
          'response' => 9433,
          'message' => 'Error Terminal del comercio erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0434' =>
        [
          'code' => 'SIS0434',
          'response' => 9434,
          'message' => 'Error ausencia de número de pedido en la op. del comercio',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0435' =>
        [
          'code' => 'SIS0435',
          'response' => 9435,
          'message' => 'Error en el cálculo de la firma',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0436' =>
        [
          'code' => 'SIS0436',
          'response' => 9436,
          'message' => 'Error en la construcción del elemento padre',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0437' =>
        [
          'code' => 'SIS0437',
          'response' => 9437,
          'message' => 'Error en la construcción del elemento',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0438' =>
        [
          'code' => 'SIS0438',
          'response' => 9438,
          'message' => 'Error en la construcción del elemento',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0439' =>
        [
          'code' => 'SIS0439',
          'response' => 9439,
          'message' => 'Error en la construcción del elemento',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0440' =>
        [
          'code' => 'SIS0440',
          'response' => 9440,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0441' =>
        [
          'code' => 'SIS0441',
          'response' => 9441,
          'message' => 'Error no tenemos bancos para Mybank',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0442' =>
        [
          'code' => 'SIS0442',
          'response' => 9442,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0443' =>
        [
          'code' => 'SIS0443',
          'response' => 9443,
          'message' => 'No se permite pago con esta tarjeta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0444' =>
        [
          'code' => 'SIS0444',
          'response' => 9444,
          'message' => 'Se está intentando acceder usando firmas antiguas y el comercio está configurado como HMAC SHA256',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0445' =>
        [
          'code' => 'SIS0445',
          'response' => 9445,
          'message' => 'Error genérico',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0446' =>
        [
          'code' => 'SIS0446',
          'response' => 9446,
          'message' => 'Es obligatorio indicar la forma de pago',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0447' =>
        [
          'code' => 'SIS0447',
          'response' => 9447,
          'message' => 'Error, se está utilizando una referencia que se generó con un adquirente distinto al adquirente que la utiliza.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0448' =>
        [
          'code' => 'SIS0448',
          'response' => 9448,
          'message' => 'El comercio no tiene el método de pago "Pago DINERS"',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0449' =>
        [
          'code' => 'SIS0449',
          'response' => 9449,
          'message' => 'Tipo de pago de la operación no permitido para este tipo de tarjeta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0450' =>
        [
          'code' => 'SIS0450',
          'response' => 9450,
          'message' => 'Tipo de pago de la operación no permitido para este tipo de tarjeta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0451' =>
        [
          'code' => 'SIS0451',
          'response' => 9451,
          'message' => 'Tipo de pago de la operación no permitido para este tipo de tarjeta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0453' =>
        [
          'code' => 'SIS0453',
          'response' => 9453,
          'message' => 'No se permiten pagos con ese tipo de tarjeta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0454' =>
        [
          'code' => 'SIS0454',
          'response' => 9454,
          'message' => 'No se permiten pagos con ese tipo de tarjeta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0455' =>
        [
          'code' => 'SIS0455',
          'response' => 9455,
          'message' => 'No se permiten pagos con ese tipo de tarjeta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0456' =>
        [
          'code' => 'SIS0456',
          'response' => 9456,
          'message' => 'No tiene método de pago configurado (Consulte a su entidad)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0457' =>
        [
          'code' => 'SIS0457',
          'response' => 9457,
          'message' => 'Error, se aplica el método de pago "MasterCard SecureCode" con Respuesta [VEReq, VERes] = N con tarjeta MasterCard Comercial y el comercio no tiene el método de pago "MasterCard Comercial"',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0458' =>
        [
          'code' => 'SIS0458',
          'response' => 9458,
          'message' => 'Error, se aplica el método de pago "MasterCard SecureCode" con Respuesta [VEReq, VERes] = U con tarjeta MasterCard Comercial y el comercio no tiene el método de pago "MasterCard Comercial"',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0459' =>
        [
          'code' => 'SIS0459',
          'response' => 9459,
          'message' => 'No tiene método de pago configurado (Consulte a su entidad)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0460' =>
        [
          'code' => 'SIS0460',
          'response' => 9460,
          'message' => 'No tiene método de pago configurado (Consulte a su entidad)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0461' =>
        [
          'code' => 'SIS0461',
          'response' => 9461,
          'message' => 'No tiene método de pago configurado (Consulte a su entidad)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0462' =>
        [
          'code' => 'SIS0462',
          'response' => 9462,
          'message' => 'Metodo de pago no disponible para conexión HOST to HOST',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0463' =>
        [
          'code' => 'SIS0463',
          'response' => 9463,
          'message' => 'Metodo de pago no permitido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0464' =>
        [
          'code' => 'SIS0464',
          'response' => 9464,
          'message' => 'El comercio no tiene el método de pago "MasterCard Comercial"',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0465' =>
        [
          'code' => 'SIS0465',
          'response' => 9465,
          'message' => 'No tiene método de pago configurado (Consulte a su entidad)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0466' =>
        [
          'code' => 'SIS0466',
          'response' => 9466,
          'message' => 'La referencia que se está utilizando no existe.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0467' =>
        [
          'code' => 'SIS0467',
          'response' => 9467,
          'message' => 'La referencia que se está utilizando está dada de baja',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0468' =>
        [
          'code' => 'SIS0468',
          'response' => 9468,
          'message' => 'Se está utilizando una referencia que se generó con un adquirente distinto al adquirente que la utiliza.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0469' =>
        [
          'code' => 'SIS0469',
          'response' => 9469,
          'message' => 'Error, no se ha superado el proceso de fraude MR',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0470' =>
        [
          'code' => 'SIS0470',
          'response' => 9470,
          'message' => 'Error la solicitud del primer factor ha fallado.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0471' =>
        [
          'code' => 'SIS0471',
          'response' => 9471,
          'message' => 'Error en la URL de redirección de solicitud del primer factor.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0472' =>
        [
          'code' => 'SIS0472',
          'response' => 9472,
          'message' => 'Error al montar la petición de Autenticación de PPII.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0473' =>
        [
          'code' => 'SIS0473',
          'response' => 9473,
          'message' => 'Error la respuesta de la petición de Autenticación de PPII es nula.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0474' =>
        [
          'code' => 'SIS0474',
          'response' => 9474,
          'message' => 'Error el statusCode de la respuesta de la petición de Autenticación de PPII es nulo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0475' =>
        [
          'code' => 'SIS0475',
          'response' => 9475,
          'message' => 'Error el idOperación de la respuesta de la petición de Autenticación de PPII es nulo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0476' =>
        [
          'code' => 'SIS0476',
          'response' => 9476,
          'message' => 'Error tratando la respuesta de la Autenticación de PPII',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0477' =>
        [
          'code' => 'SIS0477',
          'response' => 9477,
          'message' => 'Error se ha superado el tiempo definido entre el paso 1 y 2 de PPI',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0478' =>
        [
          'code' => 'SIS0478',
          'response' => 9478,
          'message' => 'Error tratando la respuesta de la Autorización de PPII',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0479' =>
        [
          'code' => 'SIS0479',
          'response' => 9479,
          'message' => 'Error la respuesta de la petición de Autorización de PPII es nula',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0480' =>
        [
          'code' => 'SIS0480',
          'response' => 9480,
          'message' => 'Error el statusCode de la respuesta de la petición de Autorización de PPII es nulo.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0481' =>
        [
          'code' => 'SIS0481',
          'response' => 9481,
          'message' => 'Error, el comercio no es Payment Facilitator',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0482' =>
        [
          'code' => 'SIS0482',
          'response' => 9482,
          'message' => 'Error el idOperación de la respuesta de una Autorización OK es nulo o no coincide con el idOp. de la Auth.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0483' =>
        [
          'code' => 'SIS0483',
          'response' => 9483,
          'message' => 'Error la respuesta de la petición de devolución de PPII es nula.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0484' =>
        [
          'code' => 'SIS0484',
          'response' => 9484,
          'message' => 'Error el statusCode o el idPetición de la respuesta de la petición de Devolución de PPII es nulo.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0485' =>
        [
          'code' => 'SIS0485',
          'response' => 9485,
          'message' => 'Error producido por la denegación de la devolución.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0486' =>
        [
          'code' => 'SIS0486',
          'response' => 9486,
          'message' => 'Error la respuesta de la petición de consulta de PPII es nula.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0487' =>
        [
          'code' => 'SIS0487',
          'response' => 9487,
          'message' => 'El comercio terminal no tiene habilitado el método de pago Paygold.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0488' =>
        [
          'code' => 'SIS0488',
          'response' => 9488,
          'message' => 'El comercio no tiene el método de pago "Pago MOTO/Manual" y la operación viene marcada como pago MOTO.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0489' =>
        [
          'code' => 'SIS0489',
          'response' => 9489,
          'message' => 'Error de datos. Operacion MPI Externo no permitida',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0490' =>
        [
          'code' => 'SIS0490',
          'response' => 9490,
          'message' => 'Error de datos. Se reciben parametros MPI Redsys en operacion MPI Externo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0491' =>
        [
          'code' => 'SIS0491',
          'response' => 9491,
          'message' => 'Error de datos. SecLevel no permitido en operacion MPI Externo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0492' =>
        [
          'code' => 'SIS0492',
          'response' => 9492,
          'message' => 'Error de datos. Se reciben parametros MPI Externo en operacion MPI Redsys',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0493' =>
        [
          'code' => 'SIS0493',
          'response' => 9493,
          'message' => 'Error de datos. Se reciben parametros de MPI en operacion no segura',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0494' =>
        [
          'code' => 'SIS0494',
          'response' => 9494,
          'message' => 'FIRMA OBSOLETA',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0495' =>
        [
          'code' => 'SIS0495',
          'response' => 9495,
          'message' => 'Configuración incorrecta ApplePay o AndroidPay',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0496' =>
        [
          'code' => 'SIS0496',
          'response' => 9496,
          'message' => 'No tiene dado de alta el método de pago AndroidPay',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0497' =>
        [
          'code' => 'SIS0497',
          'response' => 9497,
          'message' => 'No tiene dado de alta el método de pago ApplePay',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0498' =>
        [
          'code' => 'SIS0498',
          'response' => 9498,
          'message' => 'moneda / importe de la operación de ApplePay no coinciden',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0499' =>
        [
          'code' => 'SIS0499',
          'response' => 9499,
          'message' => 'Error obteniendo claves del comercio en Android/Apple Pay',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0500' =>
        [
          'code' => 'SIS0500',
          'response' => 9500,
          'message' => 'Error en el DCC Dinámico, se ha modificado la tarjeta.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0501' =>
        [
          'code' => 'SIS0501',
          'response' => 9501,
          'message' => 'Error en La validación de datos enviados para genera el Id operación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0502' =>
        [
          'code' => 'SIS0502',
          'response' => 9502,
          'message' => 'Error al validar Id Oper',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0503' =>
        [
          'code' => 'SIS0503',
          'response' => 9503,
          'message' => 'Error al validar el pedido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0504' =>
        [
          'code' => 'SIS0504',
          'response' => 9504,
          'message' => 'Error al validar tipo de transacción',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0505' =>
        [
          'code' => 'SIS0505',
          'response' => 9505,
          'message' => 'Error al validar moneda',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0506' =>
        [
          'code' => 'SIS0506',
          'response' => 9506,
          'message' => 'Error al validar el importe',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0507' =>
        [
          'code' => 'SIS0507',
          'response' => 9507,
          'message' => 'Id Oper no tiene vigencia',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0508' =>
        [
          'code' => 'SIS0508',
          'response' => 9508,
          'message' => 'Error al validar Id Oper',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0510' =>
        [
          'code' => 'SIS0510',
          'response' => 9510,
          'message' => 'No se permite el envío de datos de tarjeta si se envía ID de operación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0511' =>
        [
          'code' => 'SIS0511',
          'response' => 9511,
          'message' => 'Error en la respuesta de consulta de BINES',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0515' =>
        [
          'code' => 'SIS0515',
          'response' => 9515,
          'message' => 'El comercio tiene activado pago Amex en Perfil.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0516' =>
        [
          'code' => 'SIS0516',
          'response' => 9516,
          'message' => 'Error al montar el mensaje de China Union Pay',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0517' =>
        [
          'code' => 'SIS0517',
          'response' => 9517,
          'message' => 'Error al establecer la clave para China Union Pay',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0518' =>
        [
          'code' => 'SIS0518',
          'response' => 9518,
          'message' => 'Error al grabar los datos para pago China Union Pay',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0519' =>
        [
          'code' => 'SIS0519',
          'response' => 9519,
          'message' => 'Mensaje de autenticación erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0520' =>
        [
          'code' => 'SIS0520',
          'response' => 9520,
          'message' => 'El mensaje SecurePlus de sesión está vacío',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0521' =>
        [
          'code' => 'SIS0521',
          'response' => 9521,
          'message' => 'El xml de respuesta viene vacío',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0522' =>
        [
          'code' => 'SIS0522',
          'response' => 9522,
          'message' => 'No se han recibido parametros en datosentrada',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0523' =>
        [
          'code' => 'SIS0523',
          'response' => 9523,
          'message' => 'La firma calculada no coincide con la recibida en la respuesta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0524' =>
        [
          'code' => 'SIS0524',
          'response' => 9524,
          'message' => 'el resultado de la autenticación 3DSecure MasterCard es PARes="A" o VERes="N" y no recibimos CAVV del emisor',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0525' =>
        [
          'code' => 'SIS0525',
          'response' => 9525,
          'message' => 'No se puede utilizar la tarjeta privada en este comercio',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0526' =>
        [
          'code' => 'SIS0526',
          'response' => 9526,
          'message' => 'La tarjeta no es china',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0527' =>
        [
          'code' => 'SIS0527',
          'response' => 9527,
          'message' => 'Falta el parametro obligatorio DS_MERCHANT_BUYERID',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0528' =>
        [
          'code' => 'SIS0528',
          'response' => 9528,
          'message' => 'Formato erróneo del parametro DS_MERCHANT_BUYERID en operación Sodexo Brasil',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0529' =>
        [
          'code' => 'SIS0529',
          'response' => 9529,
          'message' => 'No se permite operación recurrente en pagos con tarjeta Voucher',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0530' =>
        [
          'code' => 'SIS0530',
          'response' => 9530,
          'message' => 'La fecha de Anulación no puede superar en mas de 7 dias a la de Preautorización.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0531' =>
        [
          'code' => 'SIS0531',
          'response' => 9531,
          'message' => 'La fecha de Anulación no puede superar en mas de 72 horas a la de Preautorización diferida',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0532' =>
        [
          'code' => 'SIS0532',
          'response' => 9532,
          'message' => 'La moneda de la petición no coincide con la devuelta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0533' =>
        [
          'code' => 'SIS0533',
          'response' => 9533,
          'message' => 'El importe de la petición no coincide con el devuelto',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0534' =>
        [
          'code' => 'SIS0534',
          'response' => 9534,
          'message' => 'No se recibe recaudación emisora o referencia del recibo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0535' =>
        [
          'code' => 'SIS0535',
          'response' => 9535,
          'message' => 'Pago de tributo fuera de plazo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0536' =>
        [
          'code' => 'SIS0536',
          'response' => 9536,
          'message' => 'Tributo ya pagado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0537' =>
        [
          'code' => 'SIS0537',
          'response' => 9537,
          'message' => 'Pago de tributo denegado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0538' =>
        [
          'code' => 'SIS0538',
          'response' => 9538,
          'message' => 'Rechazo en el pago de tributo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0539' =>
        [
          'code' => 'SIS0539',
          'response' => 9539,
          'message' => 'Error en el envío de SMS',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0540' =>
        [
          'code' => 'SIS0540',
          'response' => 9540,
          'message' => 'El móvil enviado es demasiado largo (más de 12 posiciones)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0541' =>
        [
          'code' => 'SIS0541',
          'response' => 9541,
          'message' => 'La referencia enviada es demasiada larga (más de 40 posiciones)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0542' =>
        [
          'code' => 'SIS0542',
          'response' => 9542,
          'message' => 'Error genérico. Consulte con Redsys',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0543' =>
        [
          'code' => 'SIS0543',
          'response' => 9543,
          'message' => 'Error, la tarjeta de la operación es DINERS y el comercio no tiene el método de pago "Pago DINERS" o "Pago Discover No Seguro"',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0544' =>
        [
          'code' => 'SIS0544',
          'response' => 9544,
          'message' => 'Error, la tarjeta de la operación es DINERS y el comercio no tiene el método de pago "Pago Discover No Seguro"',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0545' =>
        [
          'code' => 'SIS0545',
          'response' => 9545,
          'message' => 'Error DISCOVER',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0546' =>
        [
          'code' => 'SIS0546',
          'response' => 9546,
          'message' => 'Error DISCOVER',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0547' =>
        [
          'code' => 'SIS0547',
          'response' => 9547,
          'message' => 'Error DISCOVER',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0548' =>
        [
          'code' => 'SIS0548',
          'response' => 9548,
          'message' => 'Error DISCOVER',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0549' =>
        [
          'code' => 'SIS0549',
          'response' => 9549,
          'message' => 'Error DISCOVER',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0550' =>
        [
          'code' => 'SIS0550',
          'response' => 9550,
          'message' => 'ERROR en el gestor de envío de los SMS. Consulte con Redsys',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0551' =>
        [
          'code' => 'SIS0551',
          'response' => 9551,
          'message' => 'ERROR en el proceso de autenticación.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0552' =>
        [
          'code' => 'SIS0552',
          'response' => 9552,
          'message' => 'ERROR el resultado de la autenticacion PARes = \'U\'',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0553' =>
        [
          'code' => 'SIS0553',
          'response' => 9553,
          'message' => 'ERROR se ha intentado hacer un pago con el método de pago UPI y la tarjeta no es china',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0554' =>
        [
          'code' => 'SIS0554',
          'response' => 9554,
          'message' => 'ERROR el resultado de la autenticacion para UPI es PARes = \'U\' y el comercio no tiene métodos de pago no seguros UPI EXPRESSPAY',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0555' =>
        [
          'code' => 'SIS0555',
          'response' => 9555,
          'message' => 'ERROR la IP de conexión del módulo de administración no esta entre las permitidas.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0556' =>
        [
          'code' => 'SIS0556',
          'response' => 9556,
          'message' => 'Se envía pago Tradicional y el comercio no tiene pago Tradicional mundial ni Tradicional UE.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0557' =>
        [
          'code' => 'SIS0557',
          'response' => 9557,
          'message' => 'Se envía pago Tarjeta en Archivo y el comercio no tiene pago Tradicional mundial ni Tradicional UE.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0558' =>
        [
          'code' => 'SIS0558',
          'response' => 9558,
          'message' => 'ERROR, el formato de la fecha dsMerchantP2FExpiryDate es incorrecto',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0559' =>
        [
          'code' => 'SIS0559',
          'response' => 9559,
          'message' => 'ERROR el id Operacion de la respuesta en la autenticación PPII es nulo o no se ha obtenido de la autenticación final',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0560' =>
        [
          'code' => 'SIS0560',
          'response' => 9560,
          'message' => 'ERROR al enviar la notificacion de autenticacion al comercio',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0561' =>
        [
          'code' => 'SIS0561',
          'response' => 9561,
          'message' => 'ERROR el idOperación de la respuesta de una confirmacion separada OK es nulo o no coincide con el idOp. de la Confirmacion.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0562' =>
        [
          'code' => 'SIS0562',
          'response' => 9562,
          'message' => 'ERROR la respuesta de la petición de confirmacion separada de PPII es nula.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0563' =>
        [
          'code' => 'SIS0563',
          'response' => 9563,
          'message' => 'ERROR tratando la respuesta de la confirmacion separada de PPII.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0564' =>
        [
          'code' => 'SIS0564',
          'response' => 9564,
          'message' => 'ERROR chequeando los importes de DCC antes del envío de la operación a Stratus.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0565' =>
        [
          'code' => 'SIS0565',
          'response' => 9565,
          'message' => 'Formato del importe del campo Ds_Merchant_Amount excede del límite permitido.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0566' =>
        [
          'code' => 'SIS0566',
          'response' => 9566,
          'message' => 'Error de acceso al nuevo Servidor Criptográfico.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0567' =>
        [
          'code' => 'SIS0567',
          'response' => 9567,
          'message' => 'ERROR se ha intentado hacer un pago con una tarjeta china UPI y el comercio no tiene método de pago UPI',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0568' =>
        [
          'code' => 'SIS0568',
          'response' => 9568,
          'message' => 'Operacion de consulta de tarjeta rechazada, tipo de transacción erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0569' =>
        [
          'code' => 'SIS0569',
          'response' => 9569,
          'message' => 'Operacion de consulta de tarjeta rechazada, no se ha informado la tarjeta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0570' =>
        [
          'code' => 'SIS0570',
          'response' => 9570,
          'message' => 'Operacion de consulta de tarjeta rechazada, se ha enviado tarjeta y referencia',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0571' =>
        [
          'code' => 'SIS0571',
          'response' => 9571,
          'message' => 'Operacion de autenticacion rechazada, protocolVersion no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0572' =>
        [
          'code' => 'SIS0572',
          'response' => 9572,
          'message' => 'Operacion de autenticacion rechazada, protocolVersion no reconocido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0573' =>
        [
          'code' => 'SIS0573',
          'response' => 9573,
          'message' => 'Operacion de autenticacion rechazada, browserAcceptHeader no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0574' =>
        [
          'code' => 'SIS0574',
          'response' => 9574,
          'message' => 'Operacion de autenticacion rechazada, browserUserAgent no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0575' =>
        [
          'code' => 'SIS0575',
          'response' => 9575,
          'message' => 'Operacion de autenticacion rechazada, browserJavaEnabled no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0576' =>
        [
          'code' => 'SIS0576',
          'response' => 9576,
          'message' => 'Operacion de autenticacion rechazada, browserLanguage no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0577' =>
        [
          'code' => 'SIS0577',
          'response' => 9577,
          'message' => 'Operacion de autenticacion rechazada, browserColorDepth no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0578' =>
        [
          'code' => 'SIS0578',
          'response' => 9578,
          'message' => 'Operacion de autenticacion rechazada, browserScreenHeight no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0579' =>
        [
          'code' => 'SIS0579',
          'response' => 9579,
          'message' => 'Operacion de autenticacion rechazada, browserScreenWidth no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0580' =>
        [
          'code' => 'SIS0580',
          'response' => 9580,
          'message' => 'Operacion de autenticacion rechazada, browserTZ no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0581' =>
        [
          'code' => 'SIS0581',
          'response' => 9581,
          'message' => 'Operacion de autenticacion rechazada, datos DS_MERCHANT_EMV3DS no está indicado o es demasiado grande y no se puede convertir en JSON',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0582' =>
        [
          'code' => 'SIS0582',
          'response' => 9582,
          'message' => 'Operacion de autenticacion rechazada, threeDSServerTransID no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0583' =>
        [
          'code' => 'SIS0583',
          'response' => 9583,
          'message' => 'Operacion de autenticacion rechazada, threeDSCompInd no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0584' =>
        [
          'code' => 'SIS0584',
          'response' => 9584,
          'message' => 'Operacion de autenticacion rechazada, notificationURL no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0585' =>
        [
          'code' => 'SIS0585',
          'response' => 9585,
          'message' => 'Operacion de autenticacion EMV3DS rechazada, no existen datos en la BBDD',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0586' =>
        [
          'code' => 'SIS0586',
          'response' => 9586,
          'message' => 'Operacion de autenticacion rechazada, PARes no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0587' =>
        [
          'code' => 'SIS0587',
          'response' => 9587,
          'message' => 'Operacion de autenticacion rechazada, MD no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0588' =>
        [
          'code' => 'SIS0588',
          'response' => 9588,
          'message' => 'Operacion de autenticacion rechazada, la versión no coincide entre los mensajes AuthenticationData y ChallengeResponse',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0589' =>
        [
          'code' => 'SIS0589',
          'response' => 9589,
          'message' => 'Operacion de autenticacion rechazada, respuesta sin CRes',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0590' =>
        [
          'code' => 'SIS0590',
          'response' => 9590,
          'message' => 'Operacion de autenticacion rechazada, error al desmontar la respuesta CRes',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0591' =>
        [
          'code' => 'SIS0591',
          'response' => 9591,
          'message' => 'Operacion de autenticacion rechazada, error la respuesta CRes viene sin threeDSServerTransID',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0592' =>
        [
          'code' => 'SIS0592',
          'response' => 9592,
          'message' => 'Operacion de autenticacion rechazada, error el transStatus del CRes no coincide con el transStatus de la consulta final de la operación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0593' =>
        [
          'code' => 'SIS0593',
          'response' => 9593,
          'message' => 'Operacion de autenticacion rechazada, error el transStatus de la consulta final de la operación no está definido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0594' =>
        [
          'code' => 'SIS0594',
          'response' => 9594,
          'message' => 'Operacion de autenticacion rechazada, CRes no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0595' =>
        [
          'code' => 'SIS0595',
          'response' => 9595,
          'message' => 'El comercio indicado no tiene métodos de pago seguros permitidos en 3DSecure V2',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0596' =>
        [
          'code' => 'SIS0596',
          'response' => 9596,
          'message' => 'Operacion de consulta de tarjeta rechazada,moneda errónea',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0597' =>
        [
          'code' => 'SIS0597',
          'response' => 9597,
          'message' => 'Operacion de consulta de tarjeta rechazada,importe erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0598' =>
        [
          'code' => 'SIS0598',
          'response' => 9598,
          'message' => 'Autenticación 3DSecure v2 errónea, y no se permite hacer fallback a 3DSecure v1',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0599' =>
        [
          'code' => 'SIS0599',
          'response' => 9599,
          'message' => 'Error en el proceso de autenticación 3DSecure v2',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0600' =>
        [
          'code' => 'SIS0600',
          'response' => 9600,
          'message' => 'Error en el proceso de autenticación 3DSecure v2 - Respuesta Areq N',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0601' =>
        [
          'code' => 'SIS0601',
          'response' => 9601,
          'message' => 'Error en el proceso de autenticación 3DSecure v2 - Respuesta Areq R',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0602' =>
        [
          'code' => 'SIS0602',
          'response' => 9602,
          'message' => 'Error en el proceso de autenticación 3DSecure v2 - Respuesta Areq U y el comercio no tiene método de pago U',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0603' =>
        [
          'code' => 'SIS0603',
          'response' => 9603,
          'message' => 'Error en el parámetro DS_MERCHANT_DCC de DCC enviado en operacion H2H (REST y SOAP)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0604' =>
        [
          'code' => 'SIS0604',
          'response' => 9604,
          'message' => 'Error en los datos de DCC enviados en el parámetro DS_MERCHANT_DCC en operacion H2H (REST y SOAP)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0605' =>
        [
          'code' => 'SIS0605',
          'response' => 9605,
          'message' => 'Error en el parámetro DS_MERCHANT_MPIEXTERNAL enviado en operacion H2H (REST y SOAP)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0606' =>
        [
          'code' => 'SIS0606',
          'response' => 9606,
          'message' => 'Error en los datos de MPI enviados en el parámetro DS_MERCHANT_MPIEXTERNAL en operacion H2H (REST y SOAP)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0607' =>
        [
          'code' => 'SIS0607',
          'response' => 9607,
          'message' => 'Error del parámetro TXID de MPI enviado en el parámetro DS_MERCHANT_MPIEXTERNAL en operacion H2H (REST y SOAP) es erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0608' =>
        [
          'code' => 'SIS0608',
          'response' => 9608,
          'message' => 'Error del parámetro CAVV de MPI enviado en el parámetro DS_MERCHANT_MPIEXTERNAL en operacion H2H (REST y SOAP) es erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0609' =>
        [
          'code' => 'SIS0609',
          'response' => 9609,
          'message' => 'Error del parámetro ECI de MPI enviado en el parámetro DS_MERCHANT_MPIEXTERNAL en operacion H2H (REST y SOAP) es erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0610' =>
        [
          'code' => 'SIS0610',
          'response' => 9610,
          'message' => 'Error del parámetro threeDSServerTransID de MPI enviado en el parámetro DS_MERCHANT_MPIEXTERNAL en operacion H2H (REST y SOAP) es erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0611' =>
        [
          'code' => 'SIS0611',
          'response' => 9611,
          'message' => 'Error del parámetro dsTransID de MPI enviado en el parámetro DS_MERCHANT_MPIEXTERNAL en operacion H2H (REST y SOAP) es erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0612' =>
        [
          'code' => 'SIS0612',
          'response' => 9612,
          'message' => 'Error del parámetro authenticacionValue de MPI enviado en el parámetro DS_MERCHANT_MPIEXTERNAL en operacion H2H (REST y SOAP) es erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0613' =>
        [
          'code' => 'SIS0613',
          'response' => 9613,
          'message' => 'Error del parámetro protocolVersion de MPI enviado en el parámetro DS_MERCHANT_MPIEXTERNAL en operacion H2H (REST y SOAP) es erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0614' =>
        [
          'code' => 'SIS0614',
          'response' => 9614,
          'message' => 'Error del parámetro Eci de MPI enviado en el parámetro DS_MERCHANT_MPIEXTERNAL en operacion H2H (REST y SOAP) es erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0615' =>
        [
          'code' => 'SIS0615',
          'response' => 9615,
          'message' => 'Error en MPI Externo, marca de tarjeta no permitida en SIS para MPI Externo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0616' =>
        [
          'code' => 'SIS0616',
          'response' => 9616,
          'message' => 'Error del parámetro DS_MERCHANT_EXCEP_SCA tiene un valor erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0617' =>
        [
          'code' => 'SIS0617',
          'response' => 9617,
          'message' => 'Error del parámetro DS_MERCHANT_EXCEP_SCA es de tipo MIT y no vienen datos de COF o de pago por referencia',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0618' =>
        [
          'code' => 'SIS0618',
          'response' => 9618,
          'message' => 'Error la exención enviada no está permitida y el comercio no está preparado para autenticar',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0619' =>
        [
          'code' => 'SIS0619',
          'response' => 9619,
          'message' => 'Se recibe orderReferenceId de Amazon y no está el método de pago configurado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0620' =>
        [
          'code' => 'SIS0620',
          'response' => 9620,
          'message' => 'Error la operación de DCC tiene asociado un markUp más alto del permitido, se borran los datos de DCC',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0621' =>
        [
          'code' => 'SIS0621',
          'response' => 9621,
          'message' => 'El amazonOrderReferenceId no es válido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0622' =>
        [
          'code' => 'SIS0622',
          'response' => 9622,
          'message' => 'Error la operación original se hizo sin marca de Nuevo modelo DCC y el comercio está configurado como Nuevo Modelo DCC',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0623' =>
        [
          'code' => 'SIS0623',
          'response' => 9623,
          'message' => 'Error la operación original se hizo con marca de Nuevo modelo DCC y el comercio no está configurado como Nuevo Modelo DCC',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0624' =>
        [
          'code' => 'SIS0624',
          'response' => 9624,
          'message' => 'Error la operación original se hizo con marca de Nuevo modelo DCC pero su valor difiere del modelo configurado en el comercio',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0625' =>
        [
          'code' => 'SIS0625',
          'response' => 9625,
          'message' => 'Error en la anulación del pago, porque ya existe una devolución asociada a ese pago',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0626' =>
        [
          'code' => 'SIS0626',
          'response' => 9626,
          'message' => 'Error en la devolución del pago, ya existe una anulación de la operación que se desea devolver',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0627' =>
        [
          'code' => 'SIS0627',
          'response' => 9627,
          'message' => 'El número de referencia o solicitud enviada por CRTM no válida.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0628' =>
        [
          'code' => 'SIS0628',
          'response' => 9628,
          'message' => 'Error la operación de viene con datos de 3DSecure y viene por la entrada SERMEPA',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0629' =>
        [
          'code' => 'SIS0629',
          'response' => 9629,
          'message' => 'Error no existe la operación de confirmación separada sobre la que realizar la anulación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0630' =>
        [
          'code' => 'SIS0630',
          'response' => 9630,
          'message' => 'Error en la anulación de confirmación separada, ya existe una devolución asociada a la confirmación separada',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0631' =>
        [
          'code' => 'SIS0631',
          'response' => 9631,
          'message' => 'Error en la anulación de confirmación separada, ya existe una anulación asociada a la confirmación separada',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0632' =>
        [
          'code' => 'SIS0632',
          'response' => 9632,
          'message' => 'Error la confirmacion separada sobre la que se desea anular no está autorizada',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0633' =>
        [
          'code' => 'SIS0633',
          'response' => 9633,
          'message' => 'La fecha de Anulación no puede superar en los días configurados a la confirmacion separada.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0634' =>
        [
          'code' => 'SIS0634',
          'response' => 9634,
          'message' => 'Error no existe la operación de pago sobre la que realizar la anulación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0635' =>
        [
          'code' => 'SIS0635',
          'response' => 9635,
          'message' => 'Error en la anulación del pago, ya existe una anulación asociada al pago',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0636' =>
        [
          'code' => 'SIS0636',
          'response' => 9636,
          'message' => 'Error el pago que se desea anular no está autorizado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0637' =>
        [
          'code' => 'SIS0637',
          'response' => 9637,
          'message' => 'La fecha de Anulación no puede superar en los días configurados al pago.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0638' =>
        [
          'code' => 'SIS0638',
          'response' => 9638,
          'message' => 'Error existe más de una devolución que se quiere anular y no se ha especificado cual.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0639' =>
        [
          'code' => 'SIS0639',
          'response' => 9639,
          'message' => 'Error no existe la operación de devolución sobre la que realizar la anulación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0640' =>
        [
          'code' => 'SIS0640',
          'response' => 9640,
          'message' => 'Error la confirmacion separada sobre la que se desea anular no está autorizada o ya está anulada',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0641' =>
        [
          'code' => 'SIS0641',
          'response' => 9641,
          'message' => 'La fecha de Anulación no puede superar en los días configurados a la devolución.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0642' =>
        [
          'code' => 'SIS0642',
          'response' => 9642,
          'message' => 'La fecha de la preautorización que se desea reemplazar no puede superar los 30 días de antigüedad',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0643' =>
        [
          'code' => 'SIS0643',
          'response' => 9643,
          'message' => 'Error al obtener la personalización del comercio',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0644' =>
        [
          'code' => 'SIS0644',
          'response' => 9644,
          'message' => 'Error en el proceso de autenticación 3DSecure v2 - Se envían datos de la entrada IniciaPetición a la entrada TrataPetición',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0645' =>
        [
          'code' => 'SIS0645',
          'response' => 9645,
          'message' => '',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0646' =>
        [
          'code' => 'SIS0646',
          'response' => 9646,
          'message' => '',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0647' =>
        [
          'code' => 'SIS0647',
          'response' => 9647,
          'message' => '',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0648' =>
        [
          'code' => 'SIS0648',
          'response' => 9648,
          'message' => '',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0649' =>
        [
          'code' => 'SIS0649',
          'response' => 9649,
          'message' => '',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0650' =>
        [
          'code' => 'SIS0650',
          'response' => 9650,
          'message' => 'Error, la MAC no es correcta en la mensajeria de pago de tributos',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0651' =>
        [
          'code' => 'SIS0651',
          'response' => 9651,
          'message' => 'Error la exención exige SCA y el comercio no está preparado para autenticar',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0652' =>
        [
          'code' => 'SIS0652',
          'response' => 9652,
          'message' => 'Error la exención y la configuración del comercio exigen no SCA y el comercio no está configurado para autorizar con dicha marca de tarjeta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0653' =>
        [
          'code' => 'SIS0653',
          'response' => 9653,
          'message' => 'Operacion de autenticacion rechazada, browserJavascriptEnabled no indicado',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0654' =>
        [
          'code' => 'SIS0654',
          'response' => 9654,
          'message' => 'Error, se indican datos de 3RI en Inicia Petición y la versión que se envía en el trataPetición no es 2.2',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0655' =>
        [
          'code' => 'SIS0655',
          'response' => 9655,
          'message' => 'Error, se indican un valor de Ds_Merchant_3RI_Ind no permitido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0656' =>
        [
          'code' => 'SIS0656',
          'response' => 9656,
          'message' => 'Error, se indican un valor Ds_Merchant_3RI_Ind diferentes en el Inicia Petición y en el trataPetición',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0657' =>
        [
          'code' => 'SIS0657',
          'response' => 9657,
          'message' => 'Error, se indican datos de 3RI pero están incompletos',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0658' =>
        [
          'code' => 'SIS0658',
          'response' => 9658,
          'message' => 'Error, el parámetro threeRITrasactionID es erróneo o no se encuentran datos de operación original',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0659' =>
        [
          'code' => 'SIS0659',
          'response' => 9659,
          'message' => 'Error, los datos de FUC y Terminal obtenidos del threeRITrasactionID no corresponden al comercio que envía la operación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0660' =>
        [
          'code' => 'SIS0660',
          'response' => 9660,
          'message' => '3RI',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0661' =>
        [
          'code' => 'SIS0661',
          'response' => 9661,
          'message' => '3RI',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0662' =>
        [
          'code' => 'SIS0662',
          'response' => 9662,
          'message' => 'Error, el comercio no está entre los permitidos para realizar confirmaciones parciales.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0663' =>
        [
          'code' => 'SIS0663',
          'response' => 9663,
          'message' => 'No existe datos de Inicia Petición que concuerden con los enviados por el comercio en el mensaje Trata Petición',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0664' =>
        [
          'code' => 'SIS0664',
          'response' => 9664,
          'message' => 'No se envía el elemento Id Transaccion 3DS Server en el mensaje Trata Petición y dicho elemento existe en el mensaje Inicia Petición',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0665' =>
        [
          'code' => 'SIS0665',
          'response' => 9665,
          'message' => 'La moneda indicada por el comercio en el mensaje Trata Petición no corresponde con la enviada en el mensaje Inicia Petición',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0666' =>
        [
          'code' => 'SIS0666',
          'response' => 9666,
          'message' => 'El importe indicado por el comercio en el mensaje Trata Petición no corresponde con el enviado en el mensaje Inicia Petición',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0667' =>
        [
          'code' => 'SIS0667',
          'response' => 9667,
          'message' => 'El tipo de operación indicado por el comercio en el mensaje Trata Petición no corresponde con el enviado en el mensaje Inicia Petición',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0668' =>
        [
          'code' => 'SIS0668',
          'response' => 9668,
          'message' => 'La referencia indicada por el comercio en el mensaje Trata Petición no corresponde con la enviada en el mensaje Inicia Petición',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0669' =>
        [
          'code' => 'SIS0669',
          'response' => 9669,
          'message' => 'El Id Oper Insite indicado por el comercio en el mensaje Trata Petición no corresponde con el enviado en el mensaje Inicia Petición',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0670' =>
        [
          'code' => 'SIS0670',
          'response' => 9670,
          'message' => 'La tarjeta indicada por el comercio en el mensaje Trata Petición no corresponde con la enviada en el mensaje Inicia Petición',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0671' =>
        [
          'code' => 'SIS0671',
          'response' => 9671,
          'message' => 'Denegación por TRA Lynx',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0672' =>
        [
          'code' => 'SIS0672',
          'response' => 9672,
          'message' => 'Bizum. Fallo en la autenticación. Bloqueo tras tres intentos.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0673' =>
        [
          'code' => 'SIS0673',
          'response' => 9673,
          'message' => 'Bizum. Operación cancelada. El usuario no desea seguir.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0674' =>
        [
          'code' => 'SIS0674',
          'response' => 9674,
          'message' => 'Bizum. Abono rechazado por beneficiario.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0675' =>
        [
          'code' => 'SIS0675',
          'response' => 9675,
          'message' => 'Bizum. Cargo rechazado por ordenante.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0676' =>
        [
          'code' => 'SIS0676',
          'response' => 9676,
          'message' => 'Bizum. El procesador rechaza la operación.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0677' =>
        [
          'code' => 'SIS0677',
          'response' => 9677,
          'message' => 'Bizum. Saldo disponible insuficiente.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0678' =>
        [
          'code' => 'SIS0678',
          'response' => 9678,
          'message' => 'La versión de 3DSecure indicada en el Trata Petición es errónea o es superior a la devuelva en el inicia petición',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0681' =>
        [
          'code' => 'SIS0681',
          'response' => 9681,
          'message' => 'Error al insertar los datos de autenticación en una operación con MPI Externo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0682' =>
        [
          'code' => 'SIS0682',
          'response' => 9682,
          'message' => 'Error la operación es de tipo Consulta de TRA y el parámetro Ds_Merchant_TRA_Data es erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0683' =>
        [
          'code' => 'SIS0683',
          'response' => 9683,
          'message' => 'Error la operación es de tipo Consulta de TRA Fase 1 y falta el parámetro Ds_Merchant_TRA_Type',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0684' =>
        [
          'code' => 'SIS0684',
          'response' => 9684,
          'message' => 'Error la operación es de tipo Consulta de TRA Fase 1 y el parámetro Ds_Merchant_TRA_Type tiene un valor no permitido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0685' =>
        [
          'code' => 'SIS0685',
          'response' => 9685,
          'message' => 'Error la operación es de tipo Consulta de TRA Fase 1 y el perfil del comercio no le permite exención TRA',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0686' =>
        [
          'code' => 'SIS0686',
          'response' => 9686,
          'message' => 'Error la operación es de tipo Consulta de TRA Fase 1 y la confifguración del comercio no le permite usar el TRA de Redsys',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0687' =>
        [
          'code' => 'SIS0687',
          'response' => 9687,
          'message' => 'Error la operación es de tipo Consulta de TRA Fase 2 y falta el parámetro Ds_Merchant_TRA_Result o tiene un valor no permitido',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0688' =>
        [
          'code' => 'SIS0688',
          'response' => 9688,
          'message' => 'Error la operación es de tipo Consulta de TRA Fase 2 y falta el parámetro Ds_Merchant_TRA_Method o tiene un valor erróneo',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0689' =>
        [
          'code' => 'SIS0689',
          'response' => 9689,
          'message' => 'Error la operación es de tipo Consulta de TRA Fase 2, no existe una operación concreta de Fase 1',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0690' =>
        [
          'code' => 'SIS0690',
          'response' => 9690,
          'message' => 'Error la operación es de tipo Consulta de TRA Fase 2 y obtenemos un error en la respuesta de Lynx',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0691' =>
        [
          'code' => 'SIS0691',
          'response' => 9691,
          'message' => 'Se envían datos SamsungPay y el comercio no tiene dado de alta el método de pago SamsungPay',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0692' =>
        [
          'code' => 'SIS0692',
          'response' => 9692,
          'message' => 'Se envía petición con firma de PSP y el comercio no tiene asociado un PSP.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0693' =>
        [
          'code' => 'SIS0693',
          'response' => 9693,
          'message' => 'No se han obtenido correctamente los datos enviados por SamsungPay.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0694' =>
        [
          'code' => 'SIS0694',
          'response' => 9694,
          'message' => 'No ha podido realizarse el pago con SamsungPay',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0700' =>
        [
          'code' => 'SIS0700',
          'response' => 9700,
          'message' => 'PayPal a devuelto un KO',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS076' =>
        [
          'code' => 'SIS076',
          'response' => 9276,
          'message' => 'Unidades del Premio no numericas.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS080' =>
        [
          'code' => 'SIS080',
          'response' => 9380,
          'message' => 'Error en formato Scf_Ticket_Num_Passengers. Longitud máxima 1.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0801' =>
        [
          'code' => 'SIS0801',
          'response' => 9801,
          'message' => 'Denegada por iUPAY',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS081' =>
        [
          'code' => 'SIS081',
          'response' => 9381,
          'message' => 'Error en formato Scf_Passenger_Dni. Longitud máxima 16.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS082' =>
        [
          'code' => 'SIS082',
          'response' => 9382,
          'message' => 'Error en formato Scf_Passenger_Name. Longitud máxima 30.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0899' =>
        [
          'code' => 'SIS0899',
          'response' => 9899,
          'message' => 'No están correctamente firmados los datos que nos envían en el Ds_Merchant_Data.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0900' =>
        [
          'code' => 'SIS0900',
          'response' => 9900,
          'message' => 'SafetyPay ha devuelto un KO',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0909' =>
        [
          'code' => 'SIS0909',
          'response' => 9909,
          'message' => 'Error interno',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0912' =>
        [
          'code' => 'SIS0912',
          'response' => 9912,
          'message' => 'Emisor no disponible',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0913' =>
        [
          'code' => 'SIS0913',
          'response' => 9913,
          'message' => 'Excepción en el envío SOAP de la notificacion',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0914' =>
        [
          'code' => 'SIS0914',
          'response' => 9914,
          'message' => 'Respuesta KO en el envío SOAP de la notificacion',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0915' =>
        [
          'code' => 'SIS0915',
          'response' => 9915,
          'message' => 'Cancelado por el titular',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0928' =>
        [
          'code' => 'SIS0928',
          'response' => 9928,
          'message' => 'El titular ha cancelado la preautorización',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0929' =>
        [
          'code' => 'SIS0929',
          'response' => 9929,
          'message' => 'El titular ha cancelado la operación',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0930' =>
        [
          'code' => 'SIS0930',
          'response' => 9930,
          'message' => 'La transferencia está pendiente',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0931' =>
        [
          'code' => 'SIS0931',
          'response' => 9931,
          'message' => 'Consulte con su entidad',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0932' =>
        [
          'code' => 'SIS0932',
          'response' => 9932,
          'message' => 'Denegada por Fraude (LINX)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0933' =>
        [
          'code' => 'SIS0933',
          'response' => 9933,
          'message' => 'Denegada por Fraude (LINX)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0935' =>
        [
          'code' => 'SIS0935',
          'response' => 9935,
          'message' => 'Denegada ( Consulte con su entidad)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0944' =>
        [
          'code' => 'SIS0944',
          'response' => 9934,
          'message' => 'Denegada ( Consulte con su entidad)',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0966' =>
        [
          'code' => 'SIS0966',
          'response' => 9966,
          'message' => 'BIZUM ha devuelto un KO en la autorización',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0992' =>
        [
          'code' => 'SIS0992',
          'response' => 9992,
          'message' => 'Solicitud de PAE',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0994' =>
        [
          'code' => 'SIS0994',
          'response' => 9994,
          'message' => 'No ha seleccionado ninguna tarjeta de la cartera.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0995' =>
        [
          'code' => 'SIS0995',
          'response' => 9995,
          'message' => 'Recarga de prepago denegada',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0996' =>
        [
          'code' => 'SIS0996',
          'response' => 9996,
          'message' => 'No permite la recarga de tarjeta prepago',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0997' =>
        [
          'code' => 'SIS0997',
          'response' => 9997,
          'message' => 'Con una misma tarjeta hay varios pagos en "vuelo" en el momento que se finaliza uno el resto se deniegan con este código. Esta restricción se realiza por seguridad.',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0998' =>
        [
          'code' => 'SIS0998',
          'response' => 9998,
          'message' => 'Operación en proceso de solicitud de datos de tarjeta',
          'msg' => 'MSG0008',
          'detail' => '',
        ],
        'SIS0999' =>
        [
          'code' => 'SIS0999',
          'response' => 9999,
          'message' => 'Operación que ha sido redirigida al emisor a autenticar',
          'msg' => 'MSG0008',
          'detail' => '',
        ],

    ];

    public static function description(string $sysCode): ?string
    {
        $self = new self();

        $message = $self->messages[$sysCode] ?? [];

        return $message['message'] ?? null;
    }
}
