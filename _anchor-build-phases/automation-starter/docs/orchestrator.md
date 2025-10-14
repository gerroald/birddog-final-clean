# Orchestrator

Events:
- transition_post_status, save_post, wp_after_insert_post

Jobs:
- cwo_ping_urls: submits URLs to IndexNow (disabled on staging)
- cwo_notify_lane_change: posts a Slack card with buttons for human tasks
- (planned) cwo_suggest_context_links: propose contextual links from sibling posts

Config: `/config/workflow.json` (copied to `/wp-content/uploads/workflow-config-cache.json`)
