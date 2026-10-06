<style>
    .footer-nav.assessment-navigation {
        position: fixed;
        inset: auto 0 0;
        z-index: 1030;
        margin-bottom: 0 !important;
        padding-bottom: calc(12px + env(safe-area-inset-bottom, 0px));
        background: #fff !important;
        box-shadow: 0 -2px 12px rgba(0, 0, 0, 0.08);
    }

    .assessment-navigation > br {
        display: none;
    }

    .assessment-navigation > .container {
        padding-top: 12px;
    }

    .assessment-navigation .assessment-navigation-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }

    .assessment-navigation .assessment-navigation-status,
    .assessment-navigation .assessment-navigation-actions {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 8px;
    }

    .assessment-navigation .question-count {
        margin: 0;
    }

    .assessment-navigation button {
        white-space: nowrap;
    }

    @media (max-width: 575.98px) {
        .assessment-navigation .assessment-navigation-row {
            flex-wrap: wrap;
        }

        .assessment-navigation .assessment-navigation-status {
            width: 100%;
            justify-content: space-between;
        }

        .assessment-navigation .assessment-navigation-actions {
            width: 100%;
            justify-content: flex-end;
        }

        .assessment-navigation .question-count,
        .assessment-navigation button {
            font-size: 14px;
            padding: 8px 12px;
        }
    }
</style>

<div id="assessment-navigation-space" aria-hidden="true"></div>
<script>
    (() => {
        const navigation = document.querySelector('.assessment-navigation');
        const spacer = document.getElementById('assessment-navigation-space');
        const reserveSpace = () => {
            spacer.style.height = `${Math.ceil(navigation.getBoundingClientRect().height) + 16}px`;
        };

        reserveSpace();
        if (window.ResizeObserver) {
            new ResizeObserver(reserveSpace).observe(navigation);
        }
        window.addEventListener('resize', reserveSpace);
        window.addEventListener('load', reserveSpace);
    })();
</script>
