import React from "@wordpress/element";
import { Button } from "@wordpress/components";
import "./index.css";

interface Props {
  open: boolean;
  title?: string; // modal弹出框 title
  width?: string;
  confirmText?: string; // modal弹出框 title
  cancelText?: string; // modal弹出框 title
  children?: JSX.Element;
  onConfirm?: () => void; // 确认事件
  onCancel?: () => void; // 取消事件
  onClose: () => void; // 关闭事件
}

/**
 *  madal按钮, 点击按钮触发modal弹框
 *  常用于, 删除, 更新 , 确认等只需要成功失败状态,不需要其他返回信息的操作
 */
export const Modal = ({
  open,
  title,
  width,
  confirmText,
  cancelText,
  onConfirm,
  onCancel,
  onClose,
  children,
}: Props): JSX.Element => {
  return open ? (
    <div className="bk-modal-root">
      <div className="bk-modal-mask" />
      <div className="bk-modal-wrap" role="dialog">
        <div
          style={{
            width: width || "600px",
          }}
          role="document"
          className="bk-modal"
        >
          <div className="bk-modal-content">
            <button
              type="button"
              aria-label="Close"
              className="bk-modal-close"
              onClick={onClose}
            >
              <span className="bk-modal-close-x">
                <span
                  role="img"
                  aria-label="close"
                  className="anticon anticon-close bk-modal-close-icon"
                >
                  <svg
                    viewBox="64 64 896 896"
                    focusable="false"
                    data-icon="close"
                    width="1em"
                    height="1em"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 00203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z" />
                  </svg>
                </span>
              </span>
            </button>
            {title && (
              <div className="bk-modal-header">
                <div className="bk-modal-title">{title}</div>
              </div>
            )}
            <div className="bk-modal-body">{children}</div>
            <div className="bk-modal-footer">
              {confirmText && (
                <Button variant="primary" onClick={onConfirm}>
                  {confirmText}
                </Button>
              )}
              {cancelText && <Button onClick={onCancel}>{cancelText}</Button>}
            </div>
          </div>
        </div>
      </div>
    </div>
  ) : (
    <></>
  );
};
