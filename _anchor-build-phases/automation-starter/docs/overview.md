# Content Workflow Orchestrator — Overview

This repo seeds the automation flywheel:
- Route A canonical blog at `/blog` (home.php)
- Route B topic hubs via `page-posts-hub.php`
- MU-plugin that listens to publish/update, bumps hub freshness, and pings search engines (IndexNow)
- Lane-change notifications to Slack for human actions
- Heartbeat endpoint for watchdogs
