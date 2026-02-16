# Deployment (Hostinger SSH)

This repo is a WordPress theme (`plcalub-theme`).

## GitHub Actions
On every push to `master`, GitHub Actions will deploy the theme to your Hostinger WordPress install via SSH + rsync.

## Required GitHub Secrets
In your GitHub repo: **Settings → Secrets and variables → Actions → New repository secret**

- `HOSTINGER_SSH_HOST` = `153.92.10.86`
- `HOSTINGER_SSH_USER` = `u825103209`
- `HOSTINGER_SSH_PORT` = `65002`
- `HOSTINGER_WP_PATH` = `/home/u825103209/domains/plcalub.me/public_html`
- `HOSTINGER_SSH_KEY` = *(private key contents)*

### SSH key notes
- Generate a new keypair dedicated for GitHub Actions (recommended).
- Add the **public key** to your Hostinger account for the same SSH user.
- Paste the **private key** into `HOSTINGER_SSH_KEY` secret.

## Deploy target
The workflow deploys this repository contents to:

`$HOSTINGER_WP_PATH/wp-content/themes/plcalub-theme/`

Then you can activate the theme in WordPress.
