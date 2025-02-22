<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - inicio</title>
    <!-- Libreries -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Routes CSS Styles -->
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/styles.css">
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/normalize.css">
    <link id="favicon" rel="icon" type="image/png" href="/SmartStockManager-ADSO/public/images/short_lg-dark.png">
    <!-- Routes JS -->
    <script src="/SmartStockManager-ADSO/public/js/icon-theme.js"></script>
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SmartStockManager-ADSO/app/views/shared/sidebar.php'; ?>
    <!-- Contenido Principal -->
    <main>
        <div class="container">
            <div class="dashboard-container">
                <!-- Stats Cards -->
                <div class="stats-cards">
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>$53,000</h3>
                            <p>Today's Money <span class="positive">+55%</span></p>
                        </div>
                        <img src="/SmartStockManager-ADSO/public/images/icon/icon-shopping-cart.svg" alt="coins" class="iconbox iconb1">
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>2,300</h3>
                            <p>Today's Users <span class="positive">+5%</span></p>
                        </div>
                        <img src="/SmartStockManager-ADSO/public/images/icon/icon_groups.svg" alt="coins" class="iconbox iconb1">
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>+3,020</h3>
                            <p>New Clients <span class="negative">-14%</span></p>
                        </div>
                        <img src="/SmartStockManager-ADSO/public/images/icon/icon-person.svg" alt="coins" class="iconbox iconb1">
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>$173,000</h3>
                            <p>Total Sales <span class="positive">+8%</span></p>
                        </div>
                        <img src="/SmartStockManager-ADSO/public/images/icon/icon_money.svg" alt="coins" class="iconbox iconb1">
                    </div>
                </div>
            </div>

            <div class="welcome-section">
                <h3>Welcome back, Mark Johnson</h3>
                <p>Glad to see you again!</p>
                <a href="#" class="link-icon"> Tab to record
                    <img src="/SmartStockManager-ADSO/public/images/icon/icon-arrow-forward.svg" alt="Icono">
                </a>
            </div>
        </div>

        <div class="container">
            <div class="bottom-grid">
                <div class="satisfaction-card">
                    <h3>Satisfaction Rate</h3>
                    <p>Based on likes</p>
                </div>

                <div class="referral-card">
                    <h3>Referral Tracking</h3>
                    <p>Invited</p>
                    <p>145 people</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>