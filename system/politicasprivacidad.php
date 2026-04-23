<?php
$title = 'Política de Privacidad';
include './includes/head.php';
?>

<style>
    :root {
        --privacy-primary: #3498db;
        --privacy-primary-soft: rgba(52, 152, 219, 0.12);
        --privacy-secondary: #7f8c8d;
        --privacy-surface: #ffffff;
        --privacy-surface-alt: #f5f9fc;
        --privacy-border: rgba(52, 152, 219, 0.16);
        --privacy-text: #243746;
        --privacy-muted: #5f6f7b;
    }

    body {
        background:
            radial-gradient(circle at top right, rgba(52, 152, 219, 0.16), transparent 28%),
            linear-gradient(180deg, #f8fbfd 0%, #eef4f8 100%);
        color: var(--privacy-text);
    }

    .privacy-page {
        padding: 56px 0 72px;
    }

    .privacy-hero,
    .privacy-card,
    .privacy-sidebar {
        background: rgba(255, 255, 255, 0.96);
        border: 1px solid var(--privacy-border);
        border-radius: 24px;
        box-shadow: 0 20px 50px rgba(36, 55, 70, 0.08);
    }

    .privacy-hero {
        padding: 40px;
        margin-bottom: 28px;
    }

    .privacy-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 8px 14px;
        margin-bottom: 18px;
        border-radius: 999px;
        background: var(--privacy-primary-soft);
        color: var(--privacy-primary);
        font-size: 0.85rem;
        font-weight: 700;
    }

    .privacy-hero h1 {
        font-size: clamp(2rem, 4vw, 3rem);
        margin-bottom: 14px;
        color: #163042;
    }

    .privacy-hero p {
        color: var(--privacy-muted);
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 0;
    }

    .privacy-layout {
        display: grid;
        grid-template-columns: minmax(0, 1.75fr) minmax(280px, 0.95fr);
        gap: 24px;
        align-items: start;
    }

    .privacy-card {
        padding: 32px;
    }

    .privacy-card + .privacy-card {
        margin-top: 20px;
    }

    .privacy-section-number {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        border-radius: 14px;
        background: var(--privacy-primary-soft);
        color: var(--privacy-primary);
        font-weight: 700;
        margin-bottom: 16px;
    }

    .privacy-card h2 {
        font-size: 1.45rem;
        margin-bottom: 12px;
        color: #163042;
    }

    .privacy-card p,
    .privacy-card li {
        color: var(--privacy-muted);
        line-height: 1.8;
    }

    .privacy-card ul {
        padding-left: 1.1rem;
        margin-bottom: 0;
    }

    .privacy-highlight-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 14px;
        margin-top: 24px;
    }

    .privacy-highlight {
        padding: 18px;
        border-radius: 18px;
        background: var(--privacy-surface-alt);
        border: 1px solid rgba(52, 152, 219, 0.1);
    }

    .privacy-highlight strong {
        display: block;
        margin-bottom: 8px;
        color: #163042;
    }

    .privacy-sidebar {
        padding: 28px;
        position: sticky;
        top: 24px;
    }

    .privacy-sidebar h3 {
        font-size: 1.15rem;
        margin-bottom: 16px;
        color: #163042;
    }

    .privacy-sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0 0 24px;
    }

    .privacy-sidebar li {
        display: flex;
        gap: 12px;
        align-items: flex-start;
        color: var(--privacy-muted);
        line-height: 1.7;
    }

    .privacy-sidebar li + li {
        margin-top: 14px;
    }

    .privacy-sidebar li svg {
        flex-shrink: 0;
        color: var(--privacy-primary);
        margin-top: 4px;
    }

    .privacy-contact-box {
        padding: 18px;
        border-radius: 18px;
        background: linear-gradient(135deg, #eef7fd, #f8fbfd);
        border: 1px solid rgba(52, 152, 219, 0.12);
    }

    .privacy-contact-box a {
        color: var(--privacy-primary);
        font-weight: 600;
        text-decoration: none;
    }

    .privacy-contact-box a:hover {
        color: #1f6ca3;
        text-decoration: underline;
    }

    .privacy-actions {
        display: flex;
        justify-content: flex-end;
        margin-top: 28px;
    }

    @media (max-width: 991.98px) {
        .privacy-layout {
            grid-template-columns: 1fr;
        }

        .privacy-sidebar {
            position: static;
        }
    }

    @media (max-width: 575.98px) {
        .privacy-page {
            padding-top: 28px;
        }

        .privacy-hero,
        .privacy-card,
        .privacy-sidebar {
            border-radius: 20px;
            padding: 24px;
        }
    }
</style>

<main class="privacy-page">
    <div class="container">
        <section class="privacy-hero">
            <span class="privacy-badge">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M8 0c-.69 0-1.281.355-1.686.74-.405.384-.77.96-1.07 1.648C4.646 3.756 4.5 5.254 4.5 6v1H3a2 2 0 0 0-2 2v4.5A2.5 2.5 0 0 0 3.5 16h9a2.5 2.5 0 0 0 2.5-2.5V9a2 2 0 0 0-2-2h-1.5V6c0-.746-.146-2.244-.744-3.612-.3-.688-.665-1.264-1.07-1.648C9.281.355 8.69 0 8 0m2.5 7h-5V6c0-.587.12-1.852.579-2.903.23-.526.5-.93.8-1.214C7.18 1.6 7.548 1.5 8 1.5s.82.1 1.121.383c.3.285.57.688.8 1.214.459 1.051.579 2.316.579 2.903z"/>
                </svg>
                Protección de datos personales
            </span>
            <h1>Política de Privacidad</h1>
            <p>
                En Green PC tratamos los datos personales con criterios de confidencialidad, uso legítimo y acceso restringido.
                Esta política describe qué información puede recopilar el sistema, para qué se utiliza, cómo se protege y qué
                derechos tiene cada usuario conforme a la normativa aplicable en Ecuador, incluida la Ley Orgánica de Protección
                de Datos Personales (LOPDP).
            </p>
            <div class="privacy-highlight-grid">
                <div class="privacy-highlight">
                    <strong>Última actualización</strong>
                    <span class="text-secondary">23 de abril de 2026</span>
                </div>
                <div class="privacy-highlight">
                    <strong>Ámbito</strong>
                    <span class="text-secondary">Usuarios registrados en Green PC System</span>
                </div>
                <div class="privacy-highlight">
                    <strong>Canal de contacto</strong>
                    <span class="text-secondary">info@greenpc.dev</span>
                </div>
            </div>
        </section>

        <div class="privacy-layout">
            <div>
                <section class="privacy-card">
                    <span class="privacy-section-number">1</span>
                    <h2>Datos que podemos recopilar</h2>
                    <p>
                        La información tratada por la plataforma depende del uso del sistema y de los formularios completados por
                        cada usuario. En el flujo actual de registro y acceso, pueden recopilarse los siguientes datos:
                    </p>
                    <ul>
                        <li>Nombres y apellidos.</li>
                        <li>Correo electrónico.</li>
                        <li>Número de cédula.</li>
                        <li>Contraseña definida por el usuario durante el registro.</li>
                        <li>Datos básicos de acceso, sesión y control de ingreso al sistema.</li>
                    </ul>
                </section>

                <section class="privacy-card">
                    <span class="privacy-section-number">2</span>
                    <h2>Finalidad del tratamiento</h2>
                    <p>Los datos personales se utilizan exclusivamente para fines relacionados con la operación del sistema, entre ellos:</p>
                    <ul>
                        <li>Crear y administrar cuentas de usuario.</li>
                        <li>Permitir el acceso seguro a módulos, servicios y contenidos autorizados.</li>
                        <li>Validar identidad, credenciales y permisos dentro de la plataforma.</li>
                        <li>Atender solicitudes de soporte o requerimientos administrativos.</li>
                        <li>Cumplir obligaciones legales, regulatorias o contractuales cuando corresponda.</li>
                    </ul>
                    <p class="mb-0">
                        Green PC no comercializa los datos personales ingresados en esta plataforma y no los comparte con terceros
                        fuera de los supuestos permitidos por la ley o autorizados por el titular.
                    </p>
                </section>

                <section class="privacy-card">
                    <span class="privacy-section-number">3</span>
                    <h2>Seguridad de la información</h2>
                    <p>
                        Aplicamos medidas técnicas y organizativas razonables para proteger la información frente a accesos no autorizados,
                        alteraciones, pérdida o divulgación indebida. Entre ellas se incluyen:
                    </p>
                    <ul>
                        <li>Restricción de acceso a usuarios y personal autorizado.</li>
                        <li>Almacenamiento de contraseñas mediante funciones hash seguras.</li>
                        <li>Controles internos para autenticación, sesiones y gestión de cuentas.</li>
                        <li>Revisión periódica de los procesos vinculados al tratamiento de datos.</li>
                    </ul>
                    <p class="mb-0">
                        Ningún sistema es completamente infalible; por ello, la seguridad se gestiona como un proceso continuo de mejora.
                    </p>
                </section>

                <section class="privacy-card">
                    <span class="privacy-section-number">4</span>
                    <h2>Conservación de los datos</h2>
                    <p>
                        Los datos personales se conservan durante el tiempo necesario para cumplir la finalidad para la cual fueron
                        recopilados, mantener la operación del servicio y atender obligaciones legales o de auditoría. Cuando los datos
                        dejan de ser necesarios, se eliminan o bloquean conforme a los procedimientos internos aplicables.
                    </p>
                </section>

                <section class="privacy-card">
                    <span class="privacy-section-number">5</span>
                    <h2>Derechos del titular</h2>
                    <p>
                        El titular de los datos puede solicitar, según corresponda y conforme a la LOPDP, el ejercicio de sus derechos de:
                    </p>
                    <ul>
                        <li>Acceso a sus datos personales.</li>
                        <li>Rectificación o actualización de información inexacta.</li>
                        <li>Eliminación de datos cuando sea legalmente procedente.</li>
                        <li>Oposición o limitación del tratamiento en los casos previstos por la normativa.</li>
                        <li>Portabilidad de sus datos cuando aplique.</li>
                    </ul>
                    <p class="mb-0">
                        Para ejercer cualquiera de estos derechos, puede escribir a
                        <a class="link-primario" href="mailto:info@greenpc.dev">info@greenpc.dev</a>.
                    </p>
                </section>

                <section class="privacy-card">
                    <span class="privacy-section-number">6</span>
                    <h2>Actualizaciones de esta política</h2>
                    <p class="mb-0">
                        Esta política puede modificarse para reflejar cambios operativos, legales o técnicos. La versión vigente será la
                        publicada en esta misma página, con su fecha de actualización correspondiente.
                    </p>
                </section>
            </div>

            <aside class="privacy-sidebar">
                <h3>Resumen rápido</h3>
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M7 4.5a.5.5 0 0 0-1 0V8c0 .133.053.26.146.354l2.5 2.5a.5.5 0 0 0 .708-.708L7 7.793z"/>
                        </svg>
                        Los datos se usan para registro, autenticación, soporte y operación del sistema.
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 1a2 2 0 0 0-2 2v1H5.5A1.5 1.5 0 0 0 4 5.5v7A1.5 1.5 0 0 0 5.5 14h5a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 10.5 4H10V3a2 2 0 0 0-2-2M7 4V3a1 1 0 1 1 2 0v1z"/>
                        </svg>
                        Las contraseñas no se almacenan en texto plano.
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 0a5.53 5.53 0 0 0-4.473 2.246c-.457.632-.827 1.438-1.1 2.245C1.913 6.006 1.5 7.593 1.5 8c0 .407.413 1.994.927 3.509.273.807.643 1.613 1.1 2.245A5.53 5.53 0 0 0 8 16a5.53 5.53 0 0 0 4.473-2.246c.457-.632.827-1.438 1.1-2.245.514-1.515.927-3.102.927-3.509 0-.407-.413-1.994-.927-3.509-.273-.807-.643-1.613-1.1-2.245A5.53 5.53 0 0 0 8 0m0 3.5a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9m0 1.5a3 3 0 1 0 0 6 3 3 0 0 0 0-6"/>
                        </svg>
                        El titular puede solicitar acceso, rectificación o eliminación cuando corresponda.
                    </li>
                </ul>

                <div class="privacy-contact-box">
                    <h3>Contacto</h3>
                    <p class="text-secondary mb-2">Para consultas sobre privacidad o ejercicio de derechos:</p>
                    <p class="mb-1"><a href="mailto:info@greenpc.dev">info@greenpc.dev</a></p>
                    <p class="text-secondary mb-0">Green PC</p>
                </div>
            </aside>
        </div>

        <div class="privacy-actions">
            <a href="./index.php" class="btn btn-outline-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="me-1" viewBox="0 0 16 16" aria-hidden="true">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
                </svg>
                Regresar
            </a>
        </div>
    </div>
</main>

<?php include './includes/footer.php'; ?>
