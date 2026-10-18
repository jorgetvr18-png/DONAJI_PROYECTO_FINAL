# AJOLOMEX — Marketplace de artesanos (PHP + MySQL + Stripe)
Proyecto de Negocios Electrónicos (ITGAM). Los archivos del tema original quedaron en `legacy/`.

## Instalación (XAMPP)
1. Copia esta carpeta a `htdocs/NEGO-ELEC-main`.
2. En phpMyAdmin importa `schema.sql` (crea la BD `ajolomex` con artesanos y 12 productos).
3. En `config.php` ajusta credenciales de MySQL, `BASE_URL` y tu clave de Stripe de prueba
   (`sk_test_...`, desde dashboard.stripe.com → Desarrolladores → Claves de API). Mejor aún: usa variables de entorno `STRIPE_SECRET` y `BASE_URL`.
4. Activa la extensión `curl` en php.ini. Abre http://localhost/NEGO-ELEC-main/
5. Regístrate: **el primer usuario queda como administrador**. Desde Admin → Usuarios puedes volver "artesano" a otros usuarios.

Tarjetas de prueba: aprobada `4242 4242 4242 4242`; rechazada `4000 0000 0000 0002`.

## Cómo funciona
- Contraseñas con `password_hash`, consultas preparadas (sin inyección SQL), token CSRF, escape de salida.
- El precio y el stock siempre se leen de la BD (el cliente no puede alterar precios).
- Checkout: crea el pedido (AJX-####) → Stripe Checkout (hosted) → `pago_ok.php` verifica el pago con la API de Stripe, marca "Pagado" y descuenta inventario.
- Roles: cliente, artesano (`artesano.php`), admin (`admin.php`).

## Pendiente / siguiente mejora
Webhook de Stripe (`checkout.session.completed`) por si el cliente cierra la pestaña antes de volver; correos de confirmación; imágenes reales de producto; reseñas; HTTPS en producción.
